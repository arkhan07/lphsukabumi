<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete(); // Author

            // Commentable (polymorphic - what is being commented on)
            $table->string('commentable_type'); // Submission, Finding, Document, etc.
            $table->unsignedBigInteger('commentable_id');

            // Comment Content
            $table->text('comment');
            $table->json('attachments')->nullable(); // Array of file paths

            // Comment Type
            $table->enum('comment_type', [
                'general', 'question', 'answer', 'clarification',
                'feedback', 'approval', 'rejection', 'revision_request',
                'internal_note', 'status_update', 'other'
            ])->default('general');

            // Visibility
            $table->enum('visibility', [
                'public', 'internal', 'private', 'auditor_only', 'admin_only'
            ])->default('public');

            // Threading (nested comments/replies)
            $table->foreignId('parent_id')->nullable()->constrained('comments')->cascadeOnDelete();
            $table->integer('depth')->default(0); // Nesting level

            // Status
            $table->boolean('is_pinned')->default(false);
            $table->boolean('is_edited')->default(false);
            $table->timestamp('edited_at')->nullable();
            $table->text('edit_reason')->nullable();

            // Metadata
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();

            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('user_id');
            $table->index(['commentable_type', 'commentable_id']);
            $table->index('parent_id');
            $table->index('comment_type');
            $table->index('visibility');
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
        Schema::dropIfExists('comments');
    }
}
