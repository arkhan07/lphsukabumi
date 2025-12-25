-- =============================================
-- ADD SOFT DELETES COLUMNS
-- =============================================
-- File ini menambahkan kolom deleted_at untuk SoftDeletes
-- Import setelah dummy_data.sql

-- Add deleted_at to business_types
ALTER TABLE `business_types` ADD COLUMN `deleted_at` TIMESTAMP NULL AFTER `updated_at`;

-- Add deleted_at to product_types
ALTER TABLE `product_types` ADD COLUMN `deleted_at` TIMESTAMP NULL AFTER `updated_at`;

-- Add deleted_at to products
ALTER TABLE `products` ADD COLUMN `deleted_at` TIMESTAMP NULL AFTER `updated_at`;

-- Add deleted_at to regions
ALTER TABLE `regions` ADD COLUMN `deleted_at` TIMESTAMP NULL AFTER `updated_at`;

-- Add deleted_at to submissions
-- (Sudah ada di migration, tapi untuk memastikan)
ALTER TABLE `submissions` ADD COLUMN `deleted_at` TIMESTAMP NULL AFTER `updated_at`;

-- Add deleted_at to documents
ALTER TABLE `documents` ADD COLUMN `deleted_at` TIMESTAMP NULL AFTER `updated_at`;

-- Add deleted_at to schedules
ALTER TABLE `schedules` ADD COLUMN `deleted_at` TIMESTAMP NULL AFTER `updated_at`;

-- Add deleted_at to audits
ALTER TABLE `audits` ADD COLUMN `deleted_at` TIMESTAMP NULL AFTER `updated_at`;

-- Add deleted_at to findings
ALTER TABLE `findings` ADD COLUMN `deleted_at` TIMESTAMP NULL AFTER `updated_at`;

-- Add deleted_at to reports
ALTER TABLE `reports` ADD COLUMN `deleted_at` TIMESTAMP NULL AFTER `updated_at`;

-- Add deleted_at to invoices
ALTER TABLE `invoices` ADD COLUMN `deleted_at` TIMESTAMP NULL AFTER `updated_at`;

-- Add deleted_at to invoice_payments
ALTER TABLE `invoice_payments` ADD COLUMN `deleted_at` TIMESTAMP NULL AFTER `updated_at`;

-- Add deleted_at to fee_configurations
ALTER TABLE `fee_configurations` ADD COLUMN `deleted_at` TIMESTAMP NULL AFTER `updated_at`;
