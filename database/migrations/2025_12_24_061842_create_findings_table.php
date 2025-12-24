<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFindingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('findings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('audit_id')->constrained('audits')->cascadeOnDelete();
            $table->foreignId('submission_id')->constrained('submissions')->cascadeOnDelete();
            $table->foreignId('auditor_id')->constrained('users')->cascadeOnDelete();

            // Finding Details
            $table->string('finding_number')->unique();
            $table->enum('finding_type', [
                'non_conformity_critical', 'non_conformity_major', 'non_conformity_minor',
                'observation', 'opportunity_for_improvement', 'positive_finding'
            ])->default('observation');
            $table->enum('severity', ['critical', 'high', 'medium', 'low'])->default('medium');

            // What was found
            $table->string('title');
            $table->text('description');
            $table->text('evidence')->nullable();
            $table->json('photo_evidence')->nullable(); // Array of photo file paths
            $table->text('location')->nullable(); // Where in the facility/process
            $table->string('area_department')->nullable();

            // Reference to Standards/Requirements
            $table->text('requirement_reference')->nullable(); // Which standard/clause
            $table->text('criteria_not_met')->nullable();

            // Root Cause Analysis
            $table->text('root_cause')->nullable();
            $table->text('contributing_factors')->nullable();

            // Corrective Action Request (CAR)
            $table->boolean('requires_corrective_action')->default(false);
            $table->text('proposed_corrective_action')->nullable();
            $table->foreignId('responsible_person_id')->nullable()->constrained('users')->nullOnDelete();
            $table->date('target_completion_date')->nullable();

            // Corrective Action Response (from Auditee)
            $table->text('auditee_response')->nullable();
            $table->text('corrective_action_taken')->nullable();
            $table->date('action_completed_date')->nullable();
            $table->json('action_evidence')->nullable(); // Photos/documents of corrections
            $table->text('action_verification_notes')->nullable();

            // Verification of Corrective Action
            $table->enum('action_status', [
                'open', 'in_progress', 'pending_verification', 'verified', 'closed', 'overdue'
            ])->default('open');
            $table->boolean('is_verified')->default(false);
            $table->foreignId('verified_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('verified_at')->nullable();
            $table->text('verification_notes')->nullable();

            // Follow-up
            $table->boolean('requires_followup_audit')->default(false);
            $table->date('followup_audit_date')->nullable();
            $table->text('followup_notes')->nullable();

            // Risk Assessment
            $table->enum('risk_level', ['very_high', 'high', 'medium', 'low', 'very_low'])->nullable();
            $table->text('risk_impact')->nullable();

            // Status
            $table->enum('status', ['draft', 'submitted', 'acknowledged', 'resolved', 'closed'])->default('draft');
            $table->text('remarks')->nullable();

            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('audit_id');
            $table->index('submission_id');
            $table->index('finding_number');
            $table->index('finding_type');
            $table->index('status');
            $table->index('action_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('findings');
    }
}
