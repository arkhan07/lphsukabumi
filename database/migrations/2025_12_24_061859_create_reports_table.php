<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('audit_id')->constrained('audits')->cascadeOnDelete();
            $table->foreignId('submission_id')->constrained('submissions')->cascadeOnDelete();
            $table->foreignId('prepared_by')->constrained('users')->cascadeOnDelete(); // Lead Auditor

            // Report Details
            $table->string('report_number')->unique();
            $table->enum('report_type', [
                'audit_report', 'surveillance_report', 're_certification_report',
                'special_audit_report', 'corrective_action_verification_report'
            ])->default('audit_report');
            $table->string('report_title');
            $table->text('executive_summary')->nullable();

            // Audit Information
            $table->text('audit_scope');
            $table->json('audit_objectives')->nullable();
            $table->json('audit_criteria')->nullable();
            $table->json('audit_methodology')->nullable();

            // Facility Information
            $table->text('facility_description')->nullable();
            $table->json('areas_audited')->nullable();
            $table->text('facility_observations')->nullable();

            // Audit Team
            $table->json('audit_team_details')->nullable();

            // Auditee Representatives
            $table->json('auditee_representatives')->nullable();

            // Findings Summary
            $table->integer('total_findings')->default(0);
            $table->integer('critical_findings')->default(0);
            $table->integer('major_findings')->default(0);
            $table->integer('minor_findings')->default(0);
            $table->integer('observations')->default(0);
            $table->text('findings_summary')->nullable();

            // Detailed Findings
            $table->longText('findings_detail')->nullable(); // JSON or HTML content
            $table->json('finding_ids')->nullable(); // Array of finding IDs

            // Overall Assessment
            $table->enum('overall_result', [
                'recommend_certification', 'recommend_with_conditions',
                'not_recommend', 'need_re_audit'
            ])->default('recommend_with_conditions');
            $table->text('audit_conclusion');
            $table->text('strengths')->nullable();
            $table->text('weaknesses')->nullable();
            $table->text('recommendations')->nullable();

            // Halal Compliance Assessment
            $table->integer('halal_compliance_score')->nullable(); // 0-100
            $table->enum('halal_compliance_level', ['excellent', 'good', 'satisfactory', 'needs_improvement', 'not_compliant'])->nullable();
            $table->text('halal_compliance_notes')->nullable();

            // Report Content
            $table->longText('report_content')->nullable(); // Main report content (HTML/JSON)
            $table->json('attachments')->nullable(); // Array of attachment file paths
            $table->text('report_file_path')->nullable(); // PDF version

            // Report Status
            $table->enum('status', [
                'draft', 'submitted', 'under_review', 'revision_required',
                'approved', 'rejected', 'finalized'
            ])->default('draft');

            // Review and Approval
            $table->foreignId('reviewed_by')->nullable()->constrained('users')->nullOnDelete(); // Manajer Teknis
            $table->timestamp('reviewed_at')->nullable();
            $table->text('review_notes')->nullable();

            $table->foreignId('approved_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('approved_at')->nullable();
            $table->text('approval_notes')->nullable();

            // Submission to External Parties
            $table->boolean('submitted_to_fatwa')->default(false);
            $table->timestamp('submitted_to_fatwa_at')->nullable();
            $table->boolean('submitted_to_bpjph')->default(false);
            $table->timestamp('submitted_to_bpjph_at')->nullable();

            // Version Control
            $table->integer('version')->default(1);
            $table->foreignId('previous_version_id')->nullable()->constrained('reports')->nullOnDelete();
            $table->text('version_notes')->nullable();

            // Dates
            $table->date('report_date');
            $table->date('validity_start_date')->nullable();
            $table->date('validity_end_date')->nullable();

            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('audit_id');
            $table->index('submission_id');
            $table->index('report_number');
            $table->index('status');
            $table->index('overall_result');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
