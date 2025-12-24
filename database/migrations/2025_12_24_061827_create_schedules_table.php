<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('assignment_id')->constrained('assignments')->cascadeOnDelete();
            $table->foreignId('submission_id')->constrained('submissions')->cascadeOnDelete();
            $table->foreignId('created_by')->constrained('users')->cascadeOnDelete();

            // Schedule Details
            $table->string('title');
            $table->text('description')->nullable();
            $table->enum('activity_type', [
                'opening_meeting', 'document_review', 'facility_tour',
                'interview', 'observation', 'sampling', 'testing',
                'closing_meeting', 'other'
            ])->default('facility_tour');

            // Date and Time
            $table->date('schedule_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('duration_minutes')->nullable(); // Auto-calculated

            // Location
            $table->text('location')->nullable();
            $table->text('location_address')->nullable();
            $table->string('meeting_room')->nullable();

            // Participants
            $table->json('auditor_ids')->nullable(); // Array of auditor user IDs
            $table->json('auditee_ids')->nullable(); // Array of company personnel
            $table->text('external_participants')->nullable(); // Non-user participants

            // Agenda
            $table->json('agenda_items')->nullable(); // Array of agenda items
            $table->text('objectives')->nullable();
            $table->text('preparation_needed')->nullable();

            // Status
            $table->enum('status', [
                'scheduled', 'confirmed', 'rescheduled', 'in_progress',
                'completed', 'cancelled', 'postponed'
            ])->default('scheduled');
            $table->text('cancellation_reason')->nullable();

            // Rescheduling
            $table->foreignId('rescheduled_from_id')->nullable()->constrained('schedules')->nullOnDelete();
            $table->integer('reschedule_count')->default(0);
            $table->text('reschedule_reason')->nullable();

            // Confirmation
            $table->boolean('is_confirmed')->default(false);
            $table->timestamp('confirmed_at')->nullable();
            $table->foreignId('confirmed_by')->nullable()->constrained('users')->nullOnDelete();

            // Notifications
            $table->boolean('send_reminder')->default(true);
            $table->integer('reminder_hours_before')->default(24);
            $table->boolean('reminder_sent')->default(false);
            $table->timestamp('reminder_sent_at')->nullable();

            // Completion
            $table->timestamp('actual_start_time')->nullable();
            $table->timestamp('actual_end_time')->nullable();
            $table->text('completion_notes')->nullable();

            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('assignment_id');
            $table->index('submission_id');
            $table->index('schedule_date');
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
