<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('submission_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('supplier_id')->nullable()->constrained()->nullOnDelete();

            $table->string('material_name');
            $table->string('material_code')->nullable();
            $table->text('material_description')->nullable();

            // Material Type
            $table->enum('material_type', [
                'raw_material',
                'ingredient',
                'additive',
                'packaging',
                'processing_aid',
                'other'
            ])->default('raw_material');

            // Origin & Halal Status
            $table->string('origin_country')->nullable();
            $table->enum('halal_status', ['halal_certified', 'self_declared', 'doubtful', 'not_halal'])->default('doubtful');
            $table->string('halal_certificate_number')->nullable();
            $table->date('halal_certificate_expiry')->nullable();

            // Usage
            $table->decimal('usage_percentage', 5, 2)->nullable();
            $table->text('usage_notes')->nullable();

            // Verification
            $table->boolean('is_verified')->default(false);
            $table->foreignId('verified_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('verified_at')->nullable();
            $table->text('verification_notes')->nullable();

            $table->timestamps();

            $table->index('submission_id');
            $table->index(['halal_status', 'is_verified']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
