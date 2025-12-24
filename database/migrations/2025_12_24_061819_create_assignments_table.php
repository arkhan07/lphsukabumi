<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('submission_id')->constrained('submissions')->cascadeOnDelete();
            $table->foreignId('auditor_id')->constrained('users')->cascadeOnDelete(); // Auditor Halal user
            $table->foreignId('assigned_by')->constrained('users')->cascadeOnDelete(); // Manajer Teknis

            // Assignment Details
            $table->string('assignment_number')->unique();
            $table->enum('assignment_type', [
                'document_audit', 'onsite_audit', 'surveillance_audit',
                're_audit', 'special_audit'
            ])->default('onsite_audit');

            // Scope of Audit
            $table->text('audit_scope');
            $table->json('products_to_audit')->nullable(); // Array of product IDs
            $table->json('processes_to_audit')->nullable(); // Array of process IDs
            $table->text('special_instructions')->nullable();

            // Team Information
            $table->foreignId('team_leader_id')->nullable()->constrained('users')->nullOnDelete();
            $table->json('team_members')->nullable(); // Array of auditor user IDs
            $table->integer('estimated_person_days')->default(1);

            // Assignment Status
            $table->enum('status', [
                'assigned', 'accepted', 'rejected', 'in_progress',
                'completed', 'cancelled', 'on_hold'
            ])->default('assigned');
            $table->text('rejection_reason')->nullable();

            // Timeline
            $table->date('assignment_date');
            $table->date('expected_start_date')->nullable();
            $table->date('expected_completion_date')->nullable();
            $table->date('actual_start_date')->nullable();
            $table->date('actual_completion_date')->nullable();

            // Acceptance
            $table->timestamp('accepted_at')->nullable();
            $table->text('acceptance_notes')->nullable();

            // Progress Tracking
            $table->integer('progress_percentage')->default(0);
            $table->text('current_phase')->nullable(); // preparation, execution, reporting
            $table->text('notes')->nullable();

            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('submission_id');
            $table->index('auditor_id');
            $table->index('assigned_by');
            $table->index('status');
            $table->index('assignment_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assignments');
    }
}
