# Database Structure - LPH Sukabumi

Dokumentasi lengkap struktur database untuk sistem LPH Doa Bangsa Sukabumi.

## Overview

Sistem ini menggunakan Laravel dengan database relational untuk mengelola:
- Permohonan sertifikasi halal
- Fee distribution (Auditor 30%, PHR 10-15%)
- PHR 3-level hierarchy (PHR → Area Manager → Regional Manager)
- Invoice dan payment tracking

## Tables

### 1. users

Table utama untuk semua user (Admin, Manajer Teknis, Auditor, PHR, Pelaku Usaha).

**Fields:**
```
id                          - bigint
name                        - string
email                       - string (unique)
password                    - string
phone                       - string (nullable)
whatsapp                    - string (nullable)

# Referral System
referral_code               - string (unique, nullable)
referred_by                 - foreignId(users) (nullable)

# PHR Fields
phr_level                   - enum('none', 'phr', 'area_manager', 'regional_manager')
phr_recruited_count         - integer (default: 0)
phr_active_recruited_count  - integer (default: 0)
pu_referred_count           - integer (default: 0)
area_managers_count         - integer (default: 0)

# Location (for PHR territory)
province                    - string (nullable)
city                        - string (nullable)
district                    - string (nullable)

# PHR Status
is_phr_active               - boolean (default: false)
phr_joined_at               - timestamp (nullable)
last_promotion_at           - timestamp (nullable)
recruited_by_phr            - foreignId(users) (nullable)

timestamps
soft_deletes
```

**Relationships:**
- hasMany: submissions, phrFees, auditorFees, phrPromotions
- hasMany: recruitedPhrs (User), referredPelakuUsaha (User)
- belongsTo: referred_by (User), recruited_by_phr (User)

**Helper Methods:**
- `ensureReferralCode($prefix)` - Generate unique referral code
- `updatePhrStats()` - Update PHR statistics
- `autoPromote()` - Check and auto-promote PHR
- `calculateProvinceCoverage()` - Calculate regional coverage

---

### 2. submissions

Permohonan sertifikasi halal dari Pelaku Usaha.

**Fields:**
```
id                          - bigint
submission_number           - string (unique)
user_id                     - foreignId(users)
company_name                - string
company_email               - string (nullable)
company_phone               - string (nullable)
company_address             - text (nullable)
region_id                   - foreignId(regions) (nullable)
business_type_id            - foreignId(business_types) (nullable)

# Status Workflow
status                      - enum (draft, submitted, screening, screening_approved,
                                    verification, verification_approved, ready_for_assignment,
                                    assigned, scheduled, audit_in_progress, audit_completed,
                                    report_submitted, approved, rejected, completed)

# Timestamps untuk tracking
submitted_at                - timestamp (nullable)
screening_completed_at      - timestamp (nullable)
verification_completed_at   - timestamp (nullable)
assigned_at                 - timestamp (nullable)
audit_completed_at          - timestamp (nullable)
report_submitted_at         - timestamp (nullable)
approved_at                 - timestamp (nullable)
completed_at                - timestamp (nullable)

timestamps
soft_deletes
```

**Relationships:**
- belongsTo: user, region, businessType
- hasMany: products, invoices, auditorFees, phrFees
- hasOne: assignment, audit

---

### 3. invoices

Invoice/quotation untuk Pelaku Usaha.

**Fields:**
```
id                      - bigint
submission_id           - foreignId(submissions)
user_id                 - foreignId(users) - Pelaku Usaha
created_by              - foreignId(users) - Admin yang buat

invoice_number          - string (unique) - Format: 001/LPH.DB/P/01/2026
invoice_type            - enum(down_payment, full_payment, remaining_payment)
invoice_title           - string
description             - text (nullable)

# Amounts
invoice_date            - date
due_date                - date
subtotal                - decimal(15,2)
tax_percentage          - decimal(5,2)
tax_amount              - decimal(15,2)
discount_percentage     - decimal(5,2)
discount_amount         - decimal(15,2)
total_amount            - decimal(15,2)
paid_amount             - decimal(15,2)
outstanding_amount      - decimal(15,2)

# Payment Terms
payment_term            - enum(immediate, net_7, net_14, net_30, custom)
payment_days            - integer

# Status
status                  - enum(draft, sent, viewed, paid, overdue, cancelled)
sent_at                 - timestamp (nullable)
paid_at                 - timestamp (nullable) - TRIGGER fee distribution
cancelled_at            - timestamp (nullable)

timestamps
soft_deletes
```

**Relationships:**
- belongsTo: submission, user (PU), createdBy (Admin)
- hasMany: payments, auditorFees, phrFees

**Important:** 
Ketika status berubah menjadi 'paid', sistem otomatis membuat:
1. AuditorFee (30% dari invoice amount)
2. PhrFee untuk direct PHR (10%)
3. PhrFee untuk Area Manager jika ada (3%)
4. PhrFee untuk Regional Manager jika ada (2%)

---

### 4. auditor_fees

Fee untuk Auditor Halal (30% dari invoice).

**Fields:**
```
id                      - bigint
auditor_id              - foreignId(users)
invoice_id              - foreignId(invoices)
submission_id           - foreignId(submissions)

# Fee Calculation
invoice_amount          - decimal(15,2)
fee_percentage          - decimal(5,2) - Always 30%
fee_amount              - decimal(15,2) - invoice_amount * 0.30

# Payment Status
status                  - enum(pending, approved, paid, cancelled)
paid_amount             - decimal(15,2)
approved_at             - timestamp (nullable)
paid_at                 - timestamp (nullable)
approved_by             - foreignId(users) (nullable)
paid_by                 - foreignId(users) (nullable)

notes                   - text (nullable)
payment_reference       - string (nullable)

timestamps
soft_deletes
```

**Relationships:**
- belongsTo: auditor (User), invoice, submission
- belongsTo: approvedBy (User), paidBy (User)

**Flow:**
1. Created automatically when invoice status = 'paid'
2. Status: pending → approved (by Admin) → paid (by Admin)

---

### 5. phr_fees

Fee untuk PHR (10%), Area Manager (3%), Regional Manager (2%).

**Fields:**
```
id                      - bigint
phr_id                  - foreignId(users) - PHR yang dapat fee
invoice_id              - foreignId(invoices)
pelaku_usaha_id         - foreignId(users)
submission_id           - foreignId(submissions) (nullable)

# Fee Details
invoice_amount          - decimal(15,2)
fee_type                - enum(direct, downline, regional)
                          direct = 10% (PHR referensi langsung PU)
                          downline = 3% (Area Manager dari PHR)
                          regional = 2% (Regional Manager dari Area Manager)
fee_percentage          - decimal(5,2)
fee_amount              - decimal(15,2)

# Upline Chain Tracking
direct_phr_id           - foreignId(users) (nullable) - PHR yang referensi PU
area_manager_id         - foreignId(users) (nullable)
regional_manager_id     - foreignId(users) (nullable)

# Payment Status
status                  - enum(pending, approved, paid, cancelled)
paid_amount             - decimal(15,2)
approved_at             - timestamp (nullable)
paid_at                 - timestamp (nullable)
approved_by             - foreignId(users) (nullable)
paid_by                 - foreignId(users) (nullable)

notes                   - text (nullable)
payment_reference       - string (nullable)

timestamps
soft_deletes
```

**Relationships:**
- belongsTo: phr (User), invoice, pelakuUsaha (User), submission
- belongsTo: directPhr (User), areaManager (User), regionalManager (User)
- belongsTo: approvedBy (User), paidBy (User)

**Fee Distribution Logic:**
```php
Invoice PU dibayar (status = 'paid')
    ↓
1. Direct PHR Fee (10%)
   - PHR yang punya referral code di PU
   - fee_type = 'direct'
   - fee_percentage = 10%
    ↓
2. Area Manager Fee (3%) - Jika ada
   - PHR yang merekrut Direct PHR
   - Harus level 'area_manager' atau 'regional_manager'
   - fee_type = 'downline'
   - fee_percentage = 3%
    ↓
3. Regional Manager Fee (2%) - Jika ada
   - PHR yang merekrut Area Manager
   - Harus level 'regional_manager'
   - fee_type = 'regional'
   - fee_percentage = 2%
```

---

### 6. phr_promotions

Tracking promosi PHR ke level lebih tinggi.

**Fields:**
```
id                                      - bigint
user_id                                 - foreignId(users)

# Promotion Details
from_level                              - enum(none, phr, area_manager, regional_manager)
to_level                                - enum(phr, area_manager, regional_manager)
promotion_type                          - enum(auto, manual)

# Achievement Snapshot
pu_referred_count_at_promotion          - integer
phr_recruited_count_at_promotion        - integer
area_managers_count_at_promotion        - integer
province_coverage_percentage            - integer - For Regional Manager

# Approval
status                                  - enum(pending, approved, rejected)
approved_by                             - foreignId(users) (nullable)
approved_at                             - timestamp (nullable)
rejection_reason                        - text (nullable)
notes                                   - text (nullable)

timestamps
soft_deletes
```

**Relationships:**
- belongsTo: user, approvedBy (User)

**Promotion Criteria:**

**PHR → Area Manager:**
- PU referred: >= 30
- PHR recruited (active): >= 20

**Area Manager → Regional Manager:**
- Area Managers dibawahnya: >= 10
- Province coverage: >= 40%
- PU referred (total network): >= 30

---

### 7. assignments

Penugasan auditor untuk submission.

**Fields:**
```
id                          - bigint
submission_id               - foreignId(submissions)
auditor_id                  - foreignId(users)
assigned_by                 - foreignId(users) - Manajer Teknis

assignment_number           - string (unique)
assignment_type             - enum(document_audit, onsite_audit, surveillance_audit, re_audit, special_audit)
audit_scope                 - text

# Team
team_leader_id              - foreignId(users) (nullable)
team_members                - json (nullable) - Array of user IDs

# Status & Timeline
status                      - enum(assigned, accepted, rejected, in_progress, completed, cancelled, on_hold)
assignment_date             - date
expected_start_date         - date (nullable)
expected_completion_date    - date (nullable)
actual_start_date           - date (nullable)
actual_completion_date      - date (nullable)

# Progress
progress_percentage         - integer (default: 0)

timestamps
soft_deletes
```

**Relationships:**
- belongsTo: submission, auditor (User), assignedBy (User), teamLeader (User)
- hasMany: audits

---

### 8. audits

Actual audit execution records.

**Fields:**
```
id                          - bigint
assignment_id               - foreignId(assignments)
submission_id               - foreignId(submissions)
lead_auditor_id             - foreignId(users)

audit_number                - string (unique)
audit_type                  - enum(stage_1, stage_2, surveillance, re_certification, special)

# Schedule
planned_start_date          - date
planned_end_date            - date
actual_start_date           - date (nullable)
actual_end_date             - date (nullable)

# Status & Progress
status                      - enum(planned, in_progress, completed, cancelled, on_hold)
progress_percentage         - integer (default: 0)

# Findings Summary
total_findings              - integer (default: 0)
critical_findings           - integer (default: 0)
major_findings              - integer (default: 0)
minor_findings              - integer (default: 0)

# Overall Assessment
overall_result              - enum(pending, passed, passed_with_conditions, failed, need_re_audit)

timestamps
soft_deletes
```

**Relationships:**
- belongsTo: assignment, submission, leadAuditor (User)
- hasMany: findings
- hasOne: report

---

## Key Workflows

### 1. Invoice Payment → Fee Distribution

```
Admin marks invoice as 'paid'
    ↓
InvoicesController::markAsPaid()
    ↓
Check if PU has referred_by (PHR)
    ↓
YES → createPhrFees()
    ↓
    1. Create PhrFee for direct PHR (10%)
    2. Check if PHR has recruited_by_phr
        YES → Create PhrFee for Area Manager (3%)
        3. Check if Area Manager has recruited_by_phr
            YES → Create PhrFee for Regional Manager (2%)
    ↓
Also create AuditorFee (30%)
    ↓
All fees status = 'pending'
```

### 2. PHR Registration Flow

```
User registers via /register/phr?ref={PHR_CODE}
    ↓
PhrRegistrationController::register()
    ↓
1. Create User with phr_level = 'phr'
2. Assign role 'pendamping_halal_reguler'
3. Generate unique referral code
4. Link to recruiter (recruited_by_phr)
5. Update recruiter stats
6. Check auto-promotion
    ↓
Login and redirect to PHR dashboard
```

### 3. PU Registration with PHR Referral

```
PHR logs in and goes to /pelaku-usaha/submissions/create
    ↓
Form shows PHR's referral code (auto-filled, readonly)
    ↓
OR Pelaku Usaha accesses form via link: /pelaku-usaha/submissions/create?ref={PHR_CODE}
    ↓
SubmissionController::store()
    ↓
1. Create Submission
2. Update user.referred_by = PHR.id
3. Update PHR stats
4. Check PHR auto-promotion
```

### 4. Auto Promotion Check

```
User action triggers updatePhrStats()
    ↓
Update counts: phr_recruited_count, pu_referred_count, etc.
    ↓
Call autoPromote()
    ↓
Check promotion criteria:
    If PHR level and meets Area Manager criteria:
        → Create PhrPromotion (status='pending', type='auto')
        → Update user.phr_level = 'area_manager'
    
    If Area Manager level and meets Regional Manager criteria:
        → Create PhrPromotion (status='pending', type='auto')
        → Update user.phr_level = 'regional_manager'
```

---

## Migrations to Run

Pastikan menjalankan migrations dalam urutan:

```bash
# 1. Install dependencies first
composer install

# 2. Configure .env
cp .env.example .env
php artisan key:generate

# 3. Run migrations
php artisan migrate

# 4. Seed initial data (optional)
php artisan db:seed
```

**Migration Files:**
1. `2014_10_12_000000_create_users_table.php`
2. `2024_01_15_000002_add_profile_fields_to_users_table.php`
3. `2025_12_24_061714_create_submissions_table.php`
4. `2025_12_24_061819_create_assignments_table.php`
5. `2025_12_24_061834_create_audits_table.php`
6. `2026_01_01_100000_add_referral_code_to_users_table.php`
7. `2026_01_01_100001_create_auditor_fees_table.php`
8. `2026_01_01_100002_add_phr_fields_to_users_table.php`
9. `2026_01_01_100003_create_phr_fees_table.php`
10. `2026_01_01_100004_create_phr_promotions_table.php`

---

## Indexes

**Important indexes for performance:**

```sql
-- Users
users.referral_code (unique)
users.email (unique)
users.phr_level
users.is_phr_active

-- PHR Fees
phr_fees.phr_id
phr_fees.invoice_id
phr_fees.pelaku_usaha_id
phr_fees.fee_type
phr_fees.status

-- Auditor Fees
auditor_fees.auditor_id
auditor_fees.invoice_id
auditor_fees.status

-- Invoices
invoices.invoice_number (unique)
invoices.user_id
invoices.status

-- Submissions
submissions.submission_number (unique)
submissions.user_id
submissions.status

-- Assignments
assignments.assignment_number (unique)
assignments.auditor_id
assignments.submission_id
assignments.status
```

---

## Testing Data

Untuk testing, pastikan ada:

1. **Admin User**
   - Role: admin_lph
   
2. **Manajer Teknis**
   - Role: manajer_teknis

3. **Auditor**
   - Role: auditor_halal

4. **PHR** (3 levels)
   - PHR Regular (phr_level = 'phr')
   - Area Manager (phr_level = 'area_manager')
   - Regional Manager (phr_level = 'regional_manager')

5. **Pelaku Usaha**
   - Role: pelaku_usaha
   - With referred_by pointing to PHR

6. **Submissions & Invoices** untuk testing fee distribution

---

**Last Updated:** 2026-01-01
**Version:** 1.0
