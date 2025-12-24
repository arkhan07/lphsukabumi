<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();

            // Activity Details
            $table->string('log_name')->nullable(); // Group/category of log
            $table->text('description');
            $table->enum('event_type', [
                'created', 'updated', 'deleted', 'viewed', 'downloaded',
                'uploaded', 'approved', 'rejected', 'submitted', 'cancelled',
                'login', 'logout', 'failed_login', 'password_reset', 'other'
            ])->nullable();

            // Subject (what was acted upon)
            $table->string('subject_type')->nullable(); // Model class name
            $table->unsignedBigInteger('subject_id')->nullable(); // Model ID

            // Causer (who did it)
            $table->string('causer_type')->nullable(); // Usually User
            $table->unsignedBigInteger('causer_id')->nullable(); // User ID

            // Properties (additional data)
            $table->json('properties')->nullable(); // old and new values, metadata
            $table->json('old_values')->nullable(); // For update events
            $table->json('new_values')->nullable(); // For update events

            // Request Information
            $table->string('ip_address', 45)->nullable();
            $table->string('user_agent')->nullable();
            $table->string('http_method', 10)->nullable(); // GET, POST, PUT, DELETE
            $table->text('url')->nullable();

            // Batch/Session
            $table->uuid('batch_uuid')->nullable(); // Group related activities
            $table->string('session_id')->nullable();

            $table->timestamps();

            // Indexes
            $table->index('user_id');
            $table->index('log_name');
            $table->index('event_type');
            $table->index(['subject_type', 'subject_id']);
            $table->index(['causer_type', 'causer_id']);
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
        Schema::dropIfExists('activity_logs');
    }
}
