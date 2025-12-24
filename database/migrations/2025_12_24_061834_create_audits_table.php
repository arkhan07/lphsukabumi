<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('assignment_id')->constrained('assignments')->cascadeOnDelete();
            $table->foreignId('submission_id')->constrained('submissions')->cascadeOnDelete();
            $table->foreignId('lead_auditor_id')->constrained('users')->cascadeOnDelete();

            // Audit Details
            $table->string('audit_number')->unique();
            $table->enum('audit_type', [
                'stage_1', 'stage_2', 'surveillance', 're_certification', 'special'
            ])->default('stage_2');
            $table->text('audit_scope');
            $table->json('audit_criteria')->nullable(); // Standards, regulations, company procedures

            // Audit Team
            $table->json('audit_team')->nullable(); // Array of auditor user IDs with roles

            // Schedule
            $table->date('planned_start_date');
            $table->date('planned_end_date');
            $table->date('actual_start_date')->nullable();
            $table->date('actual_end_date')->nullable();
            $table->integer('audit_days')->default(1);

            // Opening Meeting
            $table->timestamp('opening_meeting_time')->nullable();
            $table->json('opening_meeting_attendees')->nullable();
            $table->text('opening_meeting_notes')->nullable();

            // Audit Execution
            $table->enum('status', [
                'planned', 'in_progress', 'completed', 'cancelled', 'on_hold'
            ])->default('planned');
            $table->integer('progress_percentage')->default(0);
            $table->json('areas_audited')->nullable(); // Array of areas/departments audited
            $table->json('processes_audited')->nullable(); // Array of process IDs
            $table->json('personnel_interviewed')->nullable(); // Array of personnel names/positions

            // Findings Summary
            $table->integer('total_findings')->default(0);
            $table->integer('critical_findings')->default(0);
            $table->integer('major_findings')->default(0);
            $table->integer('minor_findings')->default(0);
            $table->integer('observations')->default(0);
            $table->integer('opportunities_for_improvement')->default(0);

            // Closing Meeting
            $table->timestamp('closing_meeting_time')->nullable();
            $table->json('closing_meeting_attendees')->nullable();
            $table->text('closing_meeting_notes')->nullable();

            // Overall Assessment
            $table->enum('overall_result', [
                'pending', 'passed', 'passed_with_conditions', 'failed', 'need_re_audit'
            ])->default('pending');
            $table->text('audit_conclusion')->nullable();
            $table->text('recommendations')->nullable();

            // Documentation
            $table->json('audit_evidence')->nullable(); // Array of document/photo references
            $table->text('audit_notes')->nullable();

            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('assignment_id');
            $table->index('submission_id');
            $table->index('audit_number');
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
        Schema::dropIfExists('audits');
    }
}
