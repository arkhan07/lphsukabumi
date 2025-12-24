<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('submission_id')->constrained('submissions')->cascadeOnDelete();
            $table->foreignId('verifier_id')->constrained('users')->cascadeOnDelete(); // Penyedia Halal user

            // What is being verified
            $table->enum('verification_type', [
                'document', 'product', 'material', 'supplier',
                'production_process', 'facility', 'complete_submission'
            ]);
            $table->string('verifiable_type')->nullable(); // Polymorphic - Document, Product, Material, etc.
            $table->unsignedBigInteger('verifiable_id')->nullable(); // ID of the item being verified

            // Verification Details
            $table->text('verification_scope');
            $table->text('verification_method')->nullable(); // Document review, site visit, interview, etc.
            $table->text('findings')->nullable();
            $table->text('notes')->nullable();

            // Verification Result
            $table->enum('result', [
                'pending', 'approved', 'rejected', 'conditional_approval', 'revision_required'
            ])->default('pending');
            $table->text('rejection_reason')->nullable();
            $table->text('revision_notes')->nullable();
            $table->json('checklist_items')->nullable(); // Array of checklist items with status

            // Compliance Check
            $table->boolean('halal_compliance')->default(false);
            $table->boolean('document_completeness')->default(false);
            $table->boolean('information_accuracy')->default(false);
            $table->integer('compliance_score')->nullable(); // 0-100

            // Action Required
            $table->enum('action_required', [
                'none', 'upload_document', 'revise_information',
                'provide_clarification', 'site_inspection', 'other'
            ])->default('none');
            $table->text('action_description')->nullable();
            $table->date('action_deadline')->nullable();

            // Timestamps
            $table->timestamp('started_at')->nullable();
            $table->timestamp('completed_at')->nullable();

            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('submission_id');
            $table->index('verifier_id');
            $table->index('verification_type');
            $table->index('result');
            $table->index(['verifiable_type', 'verifiable_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verifications');
    }
}
