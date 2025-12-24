# Database Schema Design - LPH Doa Bangsa Sukabumi

## Overview
Dokumen ini berisi desain lengkap database untuk aplikasi LPH Doa Bangsa Sukabumi berdasarkan requirement di `Menu_dan_Fitur_LPH_Doa_Bangsa.pdf`.

---

## Core Tables

### 1. submissions (Pengajuan Sertifikasi Halal)
**Deskripsi:** Table utama untuk menyimpan data pengajuan sertifikasi halal

**Fields:**
- `id` - Primary key
- `submission_number` - Nomor unik pengajuan (auto-generated)
- `user_id` - FK ke users (Pelaku Usaha)
- Company Profile:
  - `company_name`, `company_email`, `company_phone`
  - `company_address`, `region_id`, `business_type_id`
  - `npwp`, `nib`, `halal_certificate_number`
- Location:
  - `production_location`, `location_latitude`, `location_longitude`
  - `employee_count`, `production_capacity`, `production_capacity_unit`
- Submission Info:
  - `certification_type` (new/renewal/extension)
  - `submission_date`, `target_completion_date`
- **Status Workflow:** (23 statuses)
  - draft, submitted, screening, screening_approved, screening_rejected
  - verification, verification_approved, verification_revision
  - ready_for_assignment, assigned, scheduled
  - audit_in_progress, audit_completed
  - report_submitted, report_accepted, report_revision
  - submitted_to_fatwa, submitted_to_bpjph
  - approved, rejected, cancelled, completed
- Completeness Tracking:
  - `profile_completed`, `products_completed`, `materials_completed`
  - `processes_completed`, `documents_completed`
  - `completeness_percentage`
- Important Timestamps:
  - `submitted_at`, `screening_completed_at`, `verification_completed_at`
  - `assigned_at`, `audit_completed_at`, `report_submitted_at`
  - `submitted_to_fatwa_at`, `submitted_to_bpjph_at`
  - `approved_at`, `completed_at`
- Lock Mechanism:
  - `is_locked`, `locked_by`, `locked_at`, `lock_reason`

**Indexes:** status, submission_date, user_id

---

### 2. products (Produk)
**Deskripsi:** Produk yang diajukan untuk sertifikasi

**Fields:**
- `id`, `submission_id`, `product_type_id`
- `product_name`, `product_code`, `product_description`, `brand_name`
- `packaging_type`, `net_weight`, `weight_unit`
- `barcode`, `hs_code`
- `halal_status` (halal/not_halal/doubtful)
- `monthly_production_volume`
- `shelf_life_duration`, `shelf_life_unit`

---

### 3. materials (Bahan Baku)
**Deskripsi:** Bahan baku dan ingredient untuk produk

**Fields:**
- `id`, `submission_id`, `product_id`, `supplier_id`
- `material_name`, `material_code`, `material_description`
- `material_type` (raw_material/ingredient/additive/packaging/processing_aid/other)
- `origin_country`
- `halal_status` (halal_certified/self_declared/doubtful/not_halal)
- `halal_certificate_number`, `halal_certificate_expiry`
- `usage_percentage`, `usage_notes`
- Verification: `is_verified`, `verified_by`, `verified_at`, `verification_notes`

---

### 4. suppliers (Pemasok)
**Deskripsi:** Data supplier bahan baku

**Fields:**
- `id`, `submission_id`
- `supplier_name`, `supplier_code`
- `contact_person`, `phone`, `email`, `address`, `country`
- `business_license`
- `halal_certificate_number`, `halal_certificate_expiry`
- `halal_certification_body` (MUI/JAKIM/MUIS/GCC/Other/None)
- `supplier_type` (manufacturer/distributor/importer/local_producer/other)
- `verification_status` (pending/verified/rejected)
- `verified_by`, `verified_at`, `verification_notes`

---

### 5. production_processes (Proses Produksi)
**Deskripsi:** Tahapan proses produksi

**Fields:**
- `id`, `submission_id`, `product_id`
- `process_name`, `process_order`, `process_description`
- `equipment_used`, `duration_minutes`
- `critical_control_point` (boolean)
- `halal_risk_level` (low/medium/high/critical)
- `risk_mitigation`, `monitoring_procedure`

---

### 6. documents (Dokumen)
**Deskripsi:** Semua dokumen terkait pengajuan

**Fields:**
- `id`, `submission_id`, `uploaded_by`
- `document_type` (company_profile/product_spec/material_cert/process_flow/halal_policy/sop/other)
- `document_name`, `file_path`, `file_size`, `mime_type`
- `version`, `is_latest`
- `required` (boolean), `status` (pending/approved/rejected/revision)
- `verified_by`, `verified_at`, `verification_notes`
- `access_control` (public/internal/restricted)
- `download_count`, `last_downloaded_at`

---

### 7. verifications (Verifikasi Penyedia Halal)
**Deskripsi:** Hasil verifikasi kelengkapan oleh Penyedia Halal

**Fields:**
- `id`, `submission_id`, `verifier_id` (user_id Penyedia Halal)
- `verification_type` (document/readiness/internal_audit)
- Checklist Items (JSON or separate table)
- `checklist_data` (JSON)
- `completion_percentage`
- `findings`, `recommendations`, `action_required`
- `status` (in_progress/completed/revision_requested)
- `result` (pass/conditional_pass/fail)
- Lock: `is_locked`, `locked_by`, `locked_at`, `lock_reason`
- `submitted_at`, `completed_at`

---

### 8. assignments (Penugasan Auditor)
**Deskripsi:** Penugasan auditor ke pengajuan

**Fields:**
- `id`, `submission_id`, `auditor_id`, `assigned_by` (Manajer Teknis)
- `assignment_date`, `assignment_letter_number`
- `assignment_letter_path` (PDF surat tugas)
- `scope_of_work`, `estimated_days`
- `status` (assigned/accepted/in_progress/completed/cancelled)
- Lock: `is_locked`, `locked_by`, `locked_at`, `lock_reason`
- `accepted_at`, `started_at`, `completed_at`

---

### 9. schedules (Jadwal Audit)
**Deskripsi:** Jadwal pelaksanaan audit

**Fields:**
- `id`, `submission_id`, `assignment_id`, `proposed_by`
- `audit_type` (pre_audit/main_audit/surveillance_audit)
- `proposed_date`, `proposed_time_start`, `proposed_time_end`
- `confirmed_date`, `confirmed_time_start`, `confirmed_time_end`
- `location`, `location_type` (onsite/virtual/hybrid)
- `participants` (JSON)
- `agenda`, `special_requirements`
- `status` (proposed/confirmed/rescheduled/cancelled/completed)
- `confirmed_by`, `confirmed_at`
- `cancellation_reason`, `reschedule_reason`

---

### 10. audits (Audit Eksternal)
**Deskripsi:** Data pelaksanaan audit eksternal

**Fields:**
- `id`, `submission_id`, `assignment_id`, `schedule_id`, `auditor_id`
- `audit_date`, `audit_start_time`, `audit_end_time`
- `audit_scope`, `audit_method`
- Checklist Data (JSON or separate table)
- `checklist_data` (JSON)
- `observations` (TEXT)
- `total_findings`, `critical_findings`, `major_findings`, `minor_findings`
- `overall_assessment` (compliant/conditionally_compliant/non_compliant)
- `recommendations`
- `status` (scheduled/in_progress/completed/cancelled)
- `started_at`, `completed_at`

---

### 11. findings (Temuan Audit)
**Deskripsi:** Detail temuan hasil audit

**Fields:**
- `id`, `audit_id`, `submission_id`, `auditor_id`
- `finding_number`, `finding_type` (NC/observation/OFI)
- `severity` (critical/major/minor/observation)
- `category` (documentation/implementation/maintenance/contamination/other)
- `clause_reference`, `requirement`
- `finding_description`, `objective_evidence`
- `root_cause_analysis`, `corrective_action_required`
- `proposed_corrective_action`, `target_completion_date`
- `status` (open/in_progress/closed/verified)
- Photo/Evidence: `evidence_files` (JSON)
- `closed_by`, `closed_at`, `verification_notes`

---

### 12. reports (Laporan Audit)
**Deskripsi:** Laporan audit final dari auditor

**Fields:**
- `id`, `submission_id`, `audit_id`, `auditor_id`
- `report_number`, `report_date`
- `executive_summary`, `audit_scope`, `audit_methodology`
- `audit_criteria`, `audit_limitations`
- Report Sections (JSON):
  - `findings_summary` (JSON)
  - `compliance_assessment` (JSON)
  - `strengths`, `areas_for_improvement`
- `conclusion`, `recommendation`
- `final_result` (recommend_approval/conditional_approval/recommend_rejection)
- `report_file_path` (PDF)
- Lock: `is_locked`, `locked_by`, `locked_at`, `lock_reason`
- Status: `status` (draft/submitted/under_review/accepted/revision_requested)
- `submitted_at`, `reviewed_by`, `reviewed_at`, `accepted_at`

---

## Financial Tables

### 13. invoices (Invoice)
**Deskripsi:** Invoice untuk Client dan Auditor

**Fields:**
- `id`, `submission_id`
- `invoice_type` (client/auditor)
- `invoice_for` (user_id - untuk auditor, null untuk client)
- `invoice_number`, `invoice_date`, `due_date`
- Financial Details:
  - `subtotal`, `tax_percentage`, `tax_amount`, `total_amount`
  - `currency` (default: IDR)
- Payment Scheme (untuk client):
  - `payment_scheme` (full/dp_pelunasan)
  - `dp_percentage`, `dp_amount`, `remaining_amount`
- Status:
  - `status` (draft/issued/partially_paid/paid/overdue/void/closed)
- Lock: `is_locked`, `locked_by`, `locked_at`
- `issued_by`, `issued_at`, `paid_at`, `voided_at`, `void_reason`

---

### 14. invoice_payments (Pembayaran Invoice)
**Deskripsi:** Detail pembayaran invoice

**Fields:**
- `id`, `invoice_id`, `submission_id`
- `payment_number`, `payment_date`, `payment_amount`
- `payment_method` (bank_transfer/cash/check/online)
- `payment_reference`, `bank_name`, `account_number`
- `payment_proof_path` (upload bukti bayar)
- `status` (pending/verified/rejected)
- `verified_by`, `verified_at`, `verification_notes`
- `notes`

---

### 15. fee_configurations (Konfigurasi Pembagian Fee)
**Deskripsi:** Versi konfigurasi persentase pembagian fee

**Fields:**
- `id`, `version`, `effective_date`, `end_date`
- Persentase Komponen:
  - `lph_total_percentage` (total untuk LPH)
  - `lph_operational_percentage` (74%)
  - `lph_wakaf_percentage` (1%)
  - `lph_fkdb_percentage` (24% - pemodal)
  - `auditor_percentage`
  - `penyedia_halal_percentage`
  - `sdm_syariah_percentage`
  - `komite_ketidakberpihakan_percentage`
- Validasi:
  - `total_percentage` (must = 100%)
- `is_active`, `notes`
- `created_by`, `approved_by`, `approved_at`

---

### 16. fee_distributions (Distribusi Fee per Project)
**Deskripsi:** Perhitungan dan distribusi fee per pengajuan

**Fields:**
- `id`, `submission_id`, `invoice_id` (client invoice)
- `fee_configuration_id` (versi config yang dipakai)
- Base Amount:
  - `contract_amount` (dari invoice client)
- Calculated Distributions:
  - `lph_total_amount`, `lph_operational_amount`, `lph_wakaf_amount`, `lph_fkdb_amount`
  - `auditor_amount`, `penyedia_halal_amount`
  - `sdm_syariah_amount`, `komite_ketidakberpihakan_amount`
- Assignment References:
  - `auditor_id`, `penyedia_halal_id`
- Status:
  - `status` (calculated/approved/distributed/closed)
  - `calculated_at`, `approved_by`, `approved_at`
  - `distributed_at`, `distribution_notes`

---

## Master Data Tables

### 17. regions (Wilayah)
**Fields:**
- `id`, `name`, `code`, `type` (province/city/regency)
- `parent_id` (self-reference)
- `is_active`

### 18. business_types (Jenis Usaha)
**Fields:**
- `id`, `name`, `code`, `description`
- `category` (food/beverage/cosmetics/pharmaceutical/other)
- `is_active`

### 19. product_types (Jenis Produk)
**Fields:**
- `id`, `name`, `code`, `description`
- `business_type_id`, `category`
- `is_active`

---

## Support Tables

### 20. activity_logs (Audit Trail)
**Deskripsi:** Log semua aktivitas penting

**Fields:**
- `id`, `user_id`, `submission_id`
- `action` (create/update/delete/submit/approve/reject/lock/unlock/assign/etc)
- `model_type` (polymorphic), `model_id`
- `description`, `old_values` (JSON), `new_values` (JSON)
- `ip_address`, `user_agent`
- `created_at`

**Indexes:** user_id, submission_id, action, created_at

---

### 21. notifications (Notifikasi)
**Fields:**
- `id`, `user_id`, `submission_id`
- `type` (status_change/revision_request/schedule/payment/assignment/etc)
- `title`, `message`, `action_url`
- `priority` (low/normal/high/urgent)
- `is_read`, `read_at`
- `email_sent`, `email_sent_at`
- `created_at`

---

### 22. comments (Komunikasi/Komentar)
**Fields:**
- `id`, `submission_id`, `user_id`, `parent_id` (for threading)
- `comment`, `attachments` (JSON)
- `is_internal` (boolean - hanya untuk admin/auditor)
- `mentioned_users` (JSON - array of user_ids)
- `is_edited`, `edited_at`
- `created_at`, `updated_at`

---

### 23. submission_statuses (Status History - Optional)
**Deskripsi:** History perubahan status pengajuan

**Fields:**
- `id`, `submission_id`, `from_status`, `to_status`
- `changed_by`, `reason`, `notes`
- `changed_at`

---

## Status Workflow Pengajuan

```
draft
  → submitted
  → screening
  → [screening_approved | screening_rejected]
  → verification
  → [verification_approved | verification_revision]
  → ready_for_assignment
  → assigned
  → scheduled
  → audit_in_progress
  → audit_completed
  → report_submitted
  → [report_accepted | report_revision]
  → submitted_to_fatwa
  → submitted_to_bpjph
  → [approved | rejected]
  → completed
```

**Alternative Flows:**
- Any status → `cancelled` (by authorized roles)
- `verification_revision` → `verification` (after revision)
- `report_revision` → `report_submitted` (after revision)

---

## Relationships Summary

1. **User → Submissions** (1:M) - User bisa punya banyak pengajuan
2. **Submission → Products** (1:M)
3. **Submission → Materials** (1:M)
4. **Submission → Suppliers** (1:M)
5. **Submission → Production Processes** (1:M)
6. **Submission → Documents** (1:M)
7. **Submission → Verifications** (1:M)
8. **Submission → Assignments** (1:M)
9. **Submission → Schedules** (1:M)
10. **Submission → Audits** (1:M)
11. **Audit → Findings** (1:M)
12. **Audit → Reports** (1:1 or 1:M)
13. **Submission → Invoices** (1:M) - client + auditor invoices
14. **Invoice → Payments** (1:M)
15. **Submission → Fee Distribution** (1:1)
16. **Product → Materials** (M:M or 1:M)
17. **Material → Supplier** (M:1)

---

## Indexes & Performance

**Critical Indexes:**
- `submissions.status` - untuk filter pengajuan
- `submissions.user_id` - untuk query per user
- `submissions.submission_date` - untuk sorting & filter tanggal
- `documents.submission_id` - relasi
- `activity_logs.submission_id` - audit trail query
- `notifications.user_id + is_read` - notifikasi belum dibaca
- `invoices.status + invoice_type` - filter invoice
- Composite index untuk query kompleks

---

## Lock Mechanism Implementation

Tables yang perlu lock mechanism:
1. ✅ submissions - lock data pengajuan
2. ✅ verifications - lock hasil verifikasi
3. ✅ assignments - lock penugasan auditor
4. ✅ reports - lock laporan audit
5. ✅ invoices - lock invoice

**Lock Fields:**
- `is_locked` (boolean)
- `locked_by` (FK to users)
- `locked_at` (timestamp)
- `lock_reason` (text)

**Business Rules:**
- Only authorized users can lock/unlock
- Unlock must provide reason
- Log all lock/unlock actions in activity_logs

---

## Next Steps

1. ✅ Implement all migrations
2. ✅ Create Models with relationships
3. ✅ Create Seeders for master data
4. Create Controllers & Services
5. Implement Business Logic
6. Create Views & UI
7. Testing & Validation

---

**Created:** 24 December 2025
**Version:** 1.0.0
