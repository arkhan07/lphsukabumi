<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->string('submission_number')->unique()->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Company Profile
            $table->string('company_name');
            $table->string('company_email')->nullable();
            $table->string('company_phone')->nullable();
            $table->text('company_address')->nullable();
            $table->foreignId('region_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('business_type_id')->nullable()->constrained()->nullOnDelete();
            $table->string('npwp')->nullable();
            $table->string('nib')->nullable();
            $table->string('halal_certificate_number')->nullable();

            // Location Details
            $table->text('production_location')->nullable();
            $table->decimal('location_latitude', 10, 8)->nullable();
            $table->decimal('location_longitude', 11, 8)->nullable();
            $table->integer('employee_count')->nullable();
            $table->decimal('production_capacity', 15, 2)->nullable();
            $table->string('production_capacity_unit')->nullable();

            // Submission Info
            $table->enum('certification_type', ['new', 'renewal', 'extension'])->default('new');
            $table->date('submission_date')->nullable();
            $table->date('target_completion_date')->nullable();

            // Status & Workflow
            $table->enum('status', [
                'draft',
                'submitted',
                'screening',
                'screening_approved',
                'screening_rejected',
                'verification',
                'verification_approved',
                'verification_revision',
                'ready_for_assignment',
                'assigned',
                'scheduled',
                'audit_in_progress',
                'audit_completed',
                'report_submitted',
                'report_accepted',
                'report_revision',
                'submitted_to_fatwa',
                'submitted_to_bpjph',
                'approved',
                'rejected',
                'cancelled',
                'completed'
            ])->default('draft');

            $table->text('rejection_reason')->nullable();
            $table->text('notes')->nullable();

            // Completeness Tracking
            $table->boolean('profile_completed')->default(false);
            $table->boolean('products_completed')->default(false);
            $table->boolean('materials_completed')->default(false);
            $table->boolean('processes_completed')->default(false);
            $table->boolean('documents_completed')->default(false);
            $table->integer('completeness_percentage')->default(0);

            // Important Dates
            $table->timestamp('submitted_at')->nullable();
            $table->timestamp('screening_completed_at')->nullable();
            $table->timestamp('verification_completed_at')->nullable();
            $table->timestamp('assigned_at')->nullable();
            $table->timestamp('audit_completed_at')->nullable();
            $table->timestamp('report_submitted_at')->nullable();
            $table->timestamp('submitted_to_fatwa_at')->nullable();
            $table->timestamp('submitted_to_bpjph_at')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamp('completed_at')->nullable();

            // Lock Mechanism
            $table->boolean('is_locked')->default(false);
            $table->foreignId('locked_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('locked_at')->nullable();
            $table->text('lock_reason')->nullable();

            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('status');
            $table->index('submission_date');
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('submissions');
    }
}
