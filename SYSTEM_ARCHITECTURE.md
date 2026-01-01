# Arsitektur Sistem LPH Doa Bangsa - Fee & Referral System

## 1. SISTEM INVOICE & FEE DISTRIBUTION

### A. Invoice Flow
```
Pelaku Usaha → Layanan Halal → Invoice Terbit
              ↓
         Invoice Dibayar
              ↓
     AUTO DISTRIBUSI FEE:
     ├─ Auditor Halal: 30%
     ├─ PHR/Referer: 10%
     ├─ Manajer Area: 3%
     └─ Manajer Regional: 2%
```

### B. Fee Distribution Rules

| Penerima | Persentase | Kondisi | Basis |
|----------|-----------|---------|-------|
| Auditor Halal | 30% | Selalu | Invoice PU yang diaudit |
| PHR/Referer | 10% | Jika ada referral | Invoice PU yang direferensikan |
| Manajer Area | 3% | Royalti jaringan | Invoice PU dari PHR binaan |
| Manajer Regional | 2% | Royalti jaringan | Invoice PU dari MA binaan |

## 2. ROLE & DASHBOARD

### 2.1 Admin
**Akses Penuh:**
- Manajemen user & role
- Setting kebijakan fee
- Setting syarat kenaikan level (manual/otomatis)
- Validasi pembayaran invoice
- Monitoring seluruh transaksi
- Laporan keuangan lengkap

**Dashboard:**
- Statistik global (total PU, invoice, fee)
- Recent transactions
- Pending validations
- System health

### 2.2 Manajer Teknis
**Fungsi:**
- Monitoring proses sertifikasi
- Penugasan auditor halal
- Tracking progres audit
- Evaluasi kinerja auditor
- **TIDAK** terlibat fee

**Dashboard:**
- Daftar submission in progress
- Auditor workload
- Certification status
- Timeline compliance

### 2.3 Auditor Halal
**Fungsi:**
- Melakukan audit halal
- Update status audit
- View fee 30% dari invoice

**Dashboard:**
- Daftar tugas audit (assigned)
- Status audit (proses/selesai)
- Fee tracking:
  * Total fee (30%)
  * Paid fee
  * Pending fee
- Riwayat pembayaran

### 2.4 Pelaku Usaha (PU)
**Fungsi:**
- Manage data usaha
- View sertifikasi status
- View & pay invoice
- Bisa mereferensikan PHR (link)

**Dashboard:**
- Status sertifikasi
- Invoice & pembayaran
- Riwayat pembayaran
- Link referral PHR (jika ada)

### 2.5 Pendamping Halal Reguler (PHR)

#### **3 Level Hierarchy:**

```
PHR (Level 1)
    ↓ rekrut 20 PHR + 30 PU
Manajer Area (Level 2)
    ↓ rekrut 10 MA + 40% coverage + 30 PU
Manajer Regional (Level 3)
```

#### **Fitur Semua Level:**
- Rekrut PHR baru (link referral)
- Referensikan Pelaku Usaha (link referral)
- Track jaringan (downline)
- View fee & royalti

#### **Dashboard PHR:**
- Kode afiliasi
- Statistik:
  * Total PU referred (pribadi)
  * Total PHR recruited
  * Level saat ini
  * Progress ke level berikutnya
- Fee tracking:
  * Direct fee (10% dari PU pribadi)
  * Royalti jaringan (3% atau 2%)
  * Total, Paid, Pending
- Jaringan:
  * Daftar PHR binaan
  * Daftar PU pribadi
- Actions:
  * Daftarkan PU baru
  * Rekrut PHR baru

## 3. FEE & ROYALTI SYSTEM

### 3.1 Fee Referensi PU (10%)

**Siapa dapat:**
- PHR yang mereferensikan PU
- Manajer Area yang mereferensikan PU (pribadi)
- Manajer Regional yang mereferensikan PU (pribadi)

**Perhitungan:**
```
Invoice PU = Rp 100,000,000
Fee Referensi = 10% = Rp 10,000,000
```

**Kondisi:**
- PU harus punya `referred_by` yang mengarah ke PHR/MA/MR
- PHR/MA/MR harus aktif
- Invoice harus status "paid"

### 3.2 Royalti Manajer Area (3%)

**Perhitungan:**
```
PHR (A) → rekrut → PHR (B)
PHR (B) → referensikan → PU (X)
PU (X) → bayar invoice → Rp 100,000,000

Fee Distribution:
- PHR (B) dapat 10% = Rp 10,000,000 (direct)
- MA (A) dapat 3% = Rp 3,000,000 (royalti)
```

**Syarat MA dapat royalti:**
- PHR (B) harus recruited_by MA (A)
- MA (A) harus level 'area_manager' atau 'regional_manager'
- MA (A) harus aktif

### 3.3 Royalti Manajer Regional (2%)

**Perhitungan:**
```
MR (X) → rekrut → MA (Y)
MA (Y) → rekrut → PHR (Z)
PHR (Z) → referensikan → PU (W)
PU (W) → bayar invoice → Rp 100,000,000

Fee Distribution:
- PHR (Z) dapat 10% = Rp 10,000,000 (direct)
- MA (Y) dapat 3% = Rp 3,000,000 (royalti)
- MR (X) dapat 2% = Rp 2,000,000 (royalti regional)
```

**Syarat MR dapat royalti:**
- MA (Y) harus recruited_by MR (X)
- MR (X) harus level 'regional_manager'
- MR (X) harus aktif

## 4. KENAIKAN LEVEL (PROMOTION)

### 4.1 PHR → Manajer Area

**Syarat:**
- **Referensi PU pribadi:** Minimal 30 PU
- **Rekrut PHR aktif:** Minimal 20 PHR
- **Status:** PHR harus aktif

**Mode:**
- **Otomatis:** Sistem auto-check setiap ada update stats
- **Manual:** Admin bisa promote manual

**Ketika dipromosikan:**
- `phr_level` → 'area_manager'
- Mulai dapat royalti 3% dari PHR binaan
- Create record di `phr_promotions`

### 4.2 Manajer Area → Manajer Regional

**Syarat:**
- **Rekrut Manajer Area:** Minimal 10 MA di bawahnya
- **Coverage Provinsi:** Minimal 40% wilayah provinsi tercover
- **Referensi PU pribadi:** Minimal 30 PU
- **Status:** MA harus aktif

**Perhitungan Coverage:**
```php
$totalKabKotaInProvince = 27; // Contoh: Jawa Barat
$kabKotaCovered = count(unique kabkota dari MA binaan);
$coverage = ($kabKotaCovered / $totalKabKotaInProvince) * 100;
// Jika >= 40%, eligible
```

**Mode:**
- **Otomatis:** Sistem auto-check
- **Manual:** Admin approve

**Ketika dipromosikan:**
- `phr_level` → 'regional_manager'
- Mulai dapat royalti 2% dari MA binaan
- Create record di `phr_promotions`

## 5. DATABASE STRUCTURE

### phr_fees Table
```sql
- phr_id (PHR yang dapat fee)
- invoice_id
- pelaku_usaha_id
- submission_id
- invoice_amount
- fee_type (direct/downline/regional)
- fee_percentage (10/3/2)
- fee_amount
- status (pending/approved/paid/cancelled)
- direct_phr_id (yang direct referensikan PU)
- area_manager_id (jika ada)
- regional_manager_id (jika ada)
```

### auditor_fees Table
```sql
- auditor_id
- invoice_id
- submission_id
- invoice_amount
- fee_percentage (30)
- fee_amount
- status (pending/approved/paid/cancelled)
```

### phr_promotions Table
```sql
- user_id
- from_level
- to_level
- promotion_type (auto/manual)
- pu_referred_count_at_promotion
- phr_recruited_count_at_promotion
- area_managers_count_at_promotion
- province_coverage_percentage
- status (pending/approved/rejected)
```

## 6. NAVIGATION MENUS

### Admin Menu
- Dashboard
- Users Management
  * All Users
  * Roles & Permissions
- Submissions
  * All Submissions
  * Pending Review
- Invoices
  * All Invoices
  * Pending Payment
  * Mark as Paid
- Fee Management
  * Auditor Fees
  * PHR Fees
  * Fee Settings
- PHR Management
  * All PHR
  * Promotions
  * Criteria Settings
- Reports
  * Financial Reports
  * Performance Reports

### Manajer Teknis Menu
- Dashboard
- Submissions
  * All Submissions
  * In Progress
  * Completed
- Auditor Management
  * Assign Auditor
  * Auditor Workload
  * Performance
- Reports
  * Certification Reports

### Auditor Menu
- Dashboard
- My Audits
  * Assigned Tasks
  * In Progress
  * Completed
- My Fees
  * Fee Summary
  * Payment History
- Profile

### Pelaku Usaha Menu
- Dashboard
- My Submissions
  * Create New
  * Draft
  * In Progress
  * Completed
- Invoices & Payments
  * Unpaid Invoices
  * Payment History
- PHR Referral
  * My PHR (jika ada)
  * Referral Link
- Profile

### PHR Menu
- Dashboard
- My Network
  * Recruited PHR
  * Referred PU
  * Network Structure
- Register New
  * Register PU
  * Recruit PHR
- My Fees
  * Direct Fees (10%)
  * Royalty Fees (3% or 2%)
  * Payment History
- Promotion
  * Current Level
  * Progress to Next Level
  * Promotion History
- Profile
  * Affiliation Code
  * Settings

## 7. IMPLEMENTATION PRIORITIES

### Phase 1: Core System (CURRENT)
✅ Database migrations
✅ Models & relationships
✅ Basic fee distribution
✅ PHR dashboard basic

### Phase 2: Complete Dashboards
- [ ] Admin dashboard complete
- [ ] Manajer Teknis dashboard
- [ ] Auditor dashboard updated
- [ ] PU dashboard updated
- [ ] PHR dashboard complete (3-level)

### Phase 3: Fee & Promotion Logic
- [ ] Royalty distribution (3%, 2%)
- [ ] Auto-promotion system
- [ ] Manual promotion workflow
- [ ] Fee approval workflow

### Phase 4: UI/UX
- [ ] Navigation menus for all roles
- [ ] Role-based access control
- [ ] Notifications
- [ ] Reports & analytics

### Phase 5: Testing & Polish
- [ ] End-to-end testing
- [ ] Performance optimization
- [ ] Documentation
- [ ] Training materials
