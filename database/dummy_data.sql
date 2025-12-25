-- =============================================
-- DUMMY DATA SQL SCRIPT untuk LPH Doa Bangsa
-- =============================================
-- Import file ini di phpMyAdmin setelah migrations seeded
-- Database: db_stagging

SET FOREIGN_KEY_CHECKS=0;

-- =============================================
-- 1. ROLES & PERMISSIONS
-- =============================================

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin_lph', 'Admin LPH', 'Administrator Lembaga Pemeriksa Halal', NOW(), NOW()),
(2, 'manajer_teknis', 'Manajer Teknis', 'Manajer Teknis LPH', NOW(), NOW()),
(3, 'auditor_halal', 'Auditor Halal', 'Auditor Halal LPH', NOW(), NOW()),
(4, 'pelaku_usaha', 'Pelaku Usaha', 'Pelaku Usaha yang mengajukan sertifikasi', NOW(), NOW()),
(5, 'penyedia_halal', 'Penyedia Halal', 'Penyedia bahan halal', NOW(), NOW());

-- =============================================
-- 2. USERS dengan Password: "password"
-- =============================================

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Admin LPH', 'admin@lph.com', NOW(), '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '081234567890', NOW(), NOW()),
(2, 'Manajer Teknis', 'manajer@lph.com', NOW(), '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '081234567891', NOW(), NOW()),
(3, 'Ahmad Auditor', 'auditor1@lph.com', NOW(), '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '081234567892', NOW(), NOW()),
(4, 'Siti Auditor', 'auditor2@lph.com', NOW(), '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '081234567893', NOW(), NOW()),
(5, 'PT Makanan Halal', 'usaha1@example.com', NOW(), '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '081234567894', NOW(), NOW()),
(6, 'CV Minuman Sehat', 'usaha2@example.com', NOW(), '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '081234567895', NOW(), NOW()),
(7, 'UD Berkah Jaya', 'usaha3@example.com', NOW(), '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '081234567896', NOW(), NOW()),
(8, 'Penyedia Bahan A', 'penyedia1@example.com', NOW(), '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '081234567897', NOW(), NOW()),
(9, 'Penyedia Bahan B', 'penyedia2@example.com', NOW(), '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '081234567898', NOW(), NOW());

-- Link users to roles
INSERT INTO `role_user` (`role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, NOW(), NOW()),  -- Admin LPH
(2, 2, NOW(), NOW()),  -- Manajer Teknis
(3, 3, NOW(), NOW()),  -- Auditor 1
(3, 4, NOW(), NOW()),  -- Auditor 2
(4, 5, NOW(), NOW()),  -- Pelaku Usaha 1
(4, 6, NOW(), NOW()),  -- Pelaku Usaha 2
(4, 7, NOW(), NOW()),  -- Pelaku Usaha 3
(5, 8, NOW(), NOW()),  -- Penyedia 1
(5, 9, NOW(), NOW());  -- Penyedia 2

-- =============================================
-- 3. MASTER DATA - Regions
-- =============================================

INSERT INTO `regions` (`id`, `province`, `city`, `district`, `postal_code`, `created_at`, `updated_at`) VALUES
(1, 'Jawa Barat', 'Sukabumi', 'Cibeureum', '43100', NOW(), NOW()),
(2, 'Jawa Barat', 'Sukabumi', 'Lembursitu', '43100', NOW(), NOW()),
(3, 'Jawa Barat', 'Sukabumi', 'Warudoyong', '43100', NOW(), NOW()),
(4, 'Jawa Barat', 'Bogor', 'Bogor Tengah', '16121', NOW(), NOW()),
(5, 'Jawa Barat', 'Bandung', 'Bandung Wetan', '40114', NOW(), NOW()),
(6, 'DKI Jakarta', 'Jakarta Selatan', 'Kebayoran Baru', '12180', NOW(), NOW()),
(7, 'DKI Jakarta', 'Jakarta Pusat', 'Tanah Abang', '10250', NOW(), NOW());

-- =============================================
-- 4. MASTER DATA - Business Types
-- =============================================

INSERT INTO `business_types` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Industri Makanan', 'Industri pengolahan makanan', NOW(), NOW()),
(2, 'Industri Minuman', 'Industri pengolahan minuman', NOW(), NOW()),
(3, 'Industri Kosmetik', 'Industri kosmetik dan perawatan', NOW(), NOW()),
(4, 'Industri Obat', 'Industri farmasi dan obat-obatan', NOW(), NOW()),
(5, 'Restoran & Katering', 'Usaha restoran dan katering', NOW(), NOW()),
(6, 'Retail Makanan', 'Toko/retail produk makanan', NOW(), NOW());

-- =============================================
-- 5. MASTER DATA - Product Types
-- =============================================

INSERT INTO `product_types` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Makanan & Minuman', 'Kategori makanan dan minuman', NOW(), NOW()),
(2, 'Snack & Kue', 'Makanan ringan dan kue', NOW(), NOW()),
(3, 'Bumbu & Saus', 'Bumbu masakan dan saus', NOW(), NOW()),
(4, 'Minuman Kemasan', 'Minuman dalam kemasan', NOW(), NOW()),
(5, 'Frozen Food', 'Makanan beku', NOW(), NOW()),
(6, 'Kosmetik', 'Produk kosmetik', NOW(), NOW()),
(7, 'Suplemen', 'Suplemen dan vitamin', NOW(), NOW());

-- =============================================
-- 6. SUBMISSIONS
-- =============================================

INSERT INTO `submissions` (`id`, `submission_number`, `user_id`, `company_name`, `company_email`, `company_phone`, `company_address`, `region_id`, `business_type_id`, `npwp`, `nib`, `certification_type`, `submission_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SUB-202412-00001', 5, 'PT Makanan Halal Indonesia', 'info@makananhalal.com', '0215551234', 'Jl. Raya Sukabumi No. 123', 1, 1, '01.234.567.8-901.000', 'NIB-001234567890', 'new', '2024-12-01', 'submitted', NOW(), NOW()),
(2, 'SUB-202412-00002', 6, 'CV Minuman Sehat Sejahtera', 'info@minumansehat.com', '0215551235', 'Jl. Ahmad Yani No. 45', 2, 2, '01.234.567.8-902.000', 'NIB-001234567891', 'new', '2024-12-05', 'screening', NOW(), NOW()),
(3, 'SUB-202412-00003', 7, 'UD Berkah Jaya Abadi', 'berkah@gmail.com', '0215551236', 'Jl. Merdeka No. 67', 3, 1, '01.234.567.8-903.000', 'NIB-001234567892', 'renewal', '2024-12-10', 'verification', NOW(), NOW()),
(4, 'SUB-202412-00004', 5, 'PT Makanan Halal Indonesia', 'info@makananhalal.com', '0215551234', 'Jl. Raya Sukabumi No. 123', 1, 1, '01.234.567.8-901.000', 'NIB-001234567890', 'extension', '2024-12-15', 'assigned', NOW(), NOW()),
(5, 'SUB-202412-00005', 6, 'CV Minuman Sehat Sejahtera', 'info@minumansehat.com', '0215551235', 'Jl. Ahmad Yani No. 45', 2, 2, '01.234.567.8-902.000', 'NIB-001234567891', 'new', '2024-12-18', 'approved', NOW(), NOW());

-- =============================================
-- 7. PRODUCTS
-- =============================================

INSERT INTO `products` (`id`, `submission_id`, `product_type_id`, `name`, `sku`, `brand`, `variant`, `packaging`, `weight`, `weight_unit`, `description`, `halal_status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Kerupuk Udang Premium', 'KRP-001', 'Makanan Halal', 'Original', 'Plastik 250g', 250, 'gram', 'Kerupuk udang berkualitas premium', 'pending', NOW(), NOW()),
(2, 1, 2, 'Kue Kering Nastar', 'KUE-001', 'Makanan Halal', 'Nastar', 'Toples 500g', 500, 'gram', 'Kue kering nastar lezat', 'pending', NOW(), NOW()),
(3, 2, 4, 'Jus Jeruk Segar', 'JUS-001', 'Minuman Sehat', 'Jeruk', 'Botol 250ml', 250, 'ml', 'Jus jeruk tanpa pengawet', 'pending', NOW(), NOW()),
(4, 2, 4, 'Jus Mangga', 'JUS-002', 'Minuman Sehat', 'Mangga', 'Botol 250ml', 250, 'ml', 'Jus mangga segar', 'pending', NOW(), NOW()),
(5, 3, 3, 'Sambal Pedas Nikmat', 'SMB-001', 'Berkah Jaya', 'Pedas', 'Botol 200ml', 200, 'ml', 'Sambal pedas berkualitas', 'certified', NOW(), NOW()),
(6, 5, 1, 'Nugget Ayam', 'NUG-001', 'Makanan Halal', 'Ayam', 'Frozen 500g', 500, 'gram', 'Nugget ayam halal', 'certified', NOW(), NOW());

-- =============================================
-- 8. SCHEDULES
-- =============================================

INSERT INTO `schedules` (`id`, `submission_id`, `auditor_id`, `scheduled_date`, `scheduled_time`, `duration_hours`, `location`, `audit_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 3, '2024-12-28', '09:00:00', 4, 'PT Makanan Halal Indonesia', 'on_site', 'scheduled', NOW(), NOW()),
(2, 3, 4, '2024-12-26', '10:00:00', 3, 'UD Berkah Jaya Abadi', 'on_site', 'completed', NOW(), NOW());

-- =============================================
-- 9. AUDITS
-- =============================================

INSERT INTO `audits` (`id`, `schedule_id`, `submission_id`, `auditor_id`, `audit_date`, `audit_type`, `audit_result`, `compliance_score`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 4, '2024-12-26', 'on_site', 'passed', 95.50, 'completed', NOW(), NOW());

-- =============================================
-- 10. FINDINGS
-- =============================================

INSERT INTO `findings` (`id`, `audit_id`, `submission_id`, `category`, `severity`, `finding_description`, `recommendation`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'Dokumentasi', 'minor', 'Beberapa dokumen SOP belum diupdate', 'Segera update dokumen SOP sesuai kondisi terkini', 'resolved', NOW(), NOW()),
(2, 1, 3, 'Penyimpanan', 'observation', 'Area penyimpanan bahan baku perlu lebih rapi', 'Tata ulang area penyimpanan', 'resolved', NOW(), NOW());

-- =============================================
-- 11. DOCUMENTS
-- =============================================

INSERT INTO `documents` (`id`, `submission_id`, `user_id`, `document_type`, `document_name`, `file_name`, `file_path`, `file_size`, `mime_type`, `verification_status`, `is_required`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 'nib', 'NIB Perusahaan', 'nib_001.pdf', 'documents/nib_001.pdf', 245632, 'application/pdf', 'pending', 1, NOW(), NOW()),
(2, 1, 5, 'npwp', 'NPWP Perusahaan', 'npwp_001.pdf', 'documents/npwp_001.pdf', 198456, 'application/pdf', 'verified', 1, NOW(), NOW()),
(3, 2, 6, 'nib', 'NIB Perusahaan', 'nib_002.pdf', 'documents/nib_002.pdf', 234567, 'application/pdf', 'verified', 1, NOW(), NOW()),
(4, 3, 7, 'certificate', 'Sertifikat Halal Sebelumnya', 'cert_001.pdf', 'documents/cert_001.pdf', 567890, 'application/pdf', 'verified', 0, NOW(), NOW());

-- =============================================
-- 12. INVOICES
-- =============================================

INSERT INTO `invoices` (`id`, `submission_id`, `invoice_number`, `invoice_date`, `due_date`, `subtotal`, `tax_amount`, `total_amount`, `paid_amount`, `remaining_amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 'INV-202412-00001', '2024-12-20', '2024-12-27', 2500000, 275000, 2775000, 2775000, 0, 'paid', NOW(), NOW()),
(2, 3, 'INV-202412-00002', '2024-12-15', '2024-12-22', 3000000, 330000, 3330000, 1665000, 1665000, 'partial', NOW(), NOW()),
(3, 4, 'INV-202412-00003', '2024-12-22', '2024-12-29', 2800000, 308000, 3108000, 0, 3108000, 'pending', NOW(), NOW());

-- =============================================
-- 13. INVOICE PAYMENTS
-- =============================================

INSERT INTO `invoice_payments` (`id`, `invoice_id`, `payment_number`, `payment_date`, `amount`, `payment_method`, `bank_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'PAY-202412-00001', '2024-12-21', 2775000, 'bank_transfer', 'BCA', 'verified', NOW(), NOW()),
(2, 2, 'PAY-202412-00002', '2024-12-16', 1665000, 'bank_transfer', 'Mandiri', 'verified', NOW(), NOW());

-- =============================================
-- 14. FEE CONFIGURATIONS
-- =============================================

INSERT INTO `fee_configurations` (`id`, `fee_type`, `category`, `description`, `amount`, `is_percentage`, `is_active`, `effective_from`, `created_at`, `updated_at`) VALUES
(1, 'certification', 'Makanan & Minuman', 'Biaya sertifikasi makanan dan minuman', 2500000, 0, 1, '2024-01-01', NOW(), NOW()),
(2, 'certification', 'Kosmetik', 'Biaya sertifikasi kosmetik', 3000000, 0, 1, '2024-01-01', NOW(), NOW()),
(3, 'certification', 'Obat-obatan', 'Biaya sertifikasi obat-obatan', 3500000, 0, 1, '2024-01-01', NOW(), NOW()),
(4, 'renewal', 'Perpanjangan', 'Biaya perpanjangan sertifikat', 1500000, 0, 1, '2024-01-01', NOW(), NOW()),
(5, 'audit', 'Audit Tambahan', 'Biaya audit tambahan per hari', 1000000, 0, 1, '2024-01-01', NOW(), NOW());

SET FOREIGN_KEY_CHECKS=1;
