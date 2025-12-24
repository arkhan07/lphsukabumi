<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('submission_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_type_id')->nullable()->constrained()->nullOnDelete();

            $table->string('product_name');
            $table->string('product_code')->nullable();
            $table->text('product_description')->nullable();
            $table->string('brand_name')->nullable();

            // Product Details
            $table->string('packaging_type')->nullable();
            $table->decimal('net_weight', 10, 2)->nullable();
            $table->string('weight_unit')->nullable();
            $table->string('barcode')->nullable();
            $table->string('hs_code')->nullable();

            // Halal Status
            $table->enum('halal_status', ['halal', 'not_halal', 'doubtful'])->default('doubtful');
            $table->text('halal_notes')->nullable();

            // Production Info
            $table->integer('monthly_production_volume')->nullable();
            $table->decimal('shelf_life_duration', 8, 2)->nullable();
            $table->enum('shelf_life_unit', ['days', 'weeks', 'months', 'years'])->nullable();

            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->index('submission_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
