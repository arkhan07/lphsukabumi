<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete(); // Recipient

            // Notification Details
            $table->string('title');
            $table->text('message');
            $table->enum('type', [
                'info', 'success', 'warning', 'error',
                'submission_update', 'document_approved', 'document_rejected',
                'payment_received', 'invoice_created', 'assignment_created',
                'audit_scheduled', 'finding_created', 'report_submitted',
                'deadline_reminder', 'status_changed', 'comment_added', 'other'
            ])->default('info');

            // Priority
            $table->enum('priority', ['low', 'medium', 'high', 'urgent'])->default('medium');

            // Related Entity (polymorphic)
            $table->string('notifiable_type')->nullable(); // Submission, Invoice, Assignment, etc.
            $table->unsignedBigInteger('notifiable_id')->nullable();

            // Action
            $table->text('action_url')->nullable(); // Where to go when clicked
            $table->text('action_text')->nullable(); // Button text

            // Additional Data
            $table->json('data')->nullable(); // Any additional data

            // Status
            $table->boolean('is_read')->default(false);
            $table->timestamp('read_at')->nullable();
            $table->boolean('is_sent')->default(false);
            $table->timestamp('sent_at')->nullable();

            // Delivery Channels
            $table->boolean('sent_email')->default(false);
            $table->timestamp('sent_email_at')->nullable();
            $table->boolean('sent_sms')->default(false);
            $table->timestamp('sent_sms_at')->nullable();
            $table->boolean('sent_push')->default(false);
            $table->timestamp('sent_push_at')->nullable();

            // Expiry
            $table->timestamp('expires_at')->nullable();
            $table->boolean('is_archived')->default(false);

            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('user_id');
            $table->index('type');
            $table->index('is_read');
            $table->index(['notifiable_type', 'notifiable_id']);
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
