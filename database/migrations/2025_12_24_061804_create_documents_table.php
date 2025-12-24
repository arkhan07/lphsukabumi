<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('submission_id')->constrained('submissions')->cascadeOnDelete();
            $table->foreignId('uploaded_by')->constrained('users')->cascadeOnDelete();

            // Document Type and Category
            $table->enum('document_type', [
                'company_profile', 'business_permit', 'nib', 'npwp',
                'product_specification', 'process_flow', 'facility_layout',
                'halal_certificate_material', 'halal_certificate_supplier',
                'ingredient_list', 'material_safety_data_sheet',
                'haccp_certificate', 'gmp_certificate', 'iso_certificate',
                'lab_test_result', 'product_photo', 'facility_photo',
                'contract', 'agreement', 'statement_letter',
                'audit_report', 'finding_photo', 'corrective_action_proof',
                'invoice', 'payment_proof', 'other'
            ]);
            $table->string('document_category', 50)->default('general'); // company, product, material, audit, financial

            // Document Details
            $table->string('document_name');
            $table->text('description')->nullable();
            $table->string('file_path');
            $table->string('file_name');
            $table->string('file_extension', 10);
            $table->bigInteger('file_size')->default(0); // in bytes
            $table->string('mime_type', 100)->nullable();

            // Document Status
            $table->enum('status', [
                'uploaded', 'pending_review', 'approved', 'rejected', 'revision_required'
            ])->default('uploaded');

            // Review Information
            $table->foreignId('reviewed_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('reviewed_at')->nullable();
            $table->text('review_notes')->nullable();

            // Version Control
            $table->integer('version')->default(1);
            $table->foreignId('parent_document_id')->nullable()->constrained('documents')->nullOnDelete();
            $table->boolean('is_latest_version')->default(true);

            // Validity Period (for certificates)
            $table->date('valid_from')->nullable();
            $table->date('valid_until')->nullable();
            $table->boolean('is_expired')->default(false);

            // Metadata
            $table->boolean('is_required')->default(false);
            $table->boolean('is_public')->default(false);
            $table->integer('download_count')->default(0);
            $table->text('tags')->nullable();

            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('submission_id');
            $table->index('document_type');
            $table->index('status');
            $table->index('uploaded_by');
            $table->index('is_latest_version');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
