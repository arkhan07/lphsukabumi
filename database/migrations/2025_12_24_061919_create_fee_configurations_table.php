<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeeConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_configurations', function (Blueprint $table) {
            $table->id();

            // Configuration Details
            $table->string('config_name');
            $table->string('config_code')->unique();
            $table->text('description')->nullable();

            // Fee Type
            $table->enum('fee_type', [
                'base_fee', 'audit_fee', 'surveillance_fee',
                're_certification_fee', 'document_review_fee',
                'product_fee', 'additional_service_fee'
            ]);

            // Calculation Method
            $table->enum('calculation_method', [
                'fixed_amount', 'per_product', 'per_process',
                'per_day', 'percentage', 'formula'
            ])->default('fixed_amount');

            // Amount
            $table->decimal('base_amount', 15, 2)->default(0);
            $table->decimal('min_amount', 15, 2)->nullable();
            $table->decimal('max_amount', 15, 2)->nullable();

            // Formula (for complex calculations)
            $table->text('calculation_formula')->nullable();
            // Example: "base_amount + (product_count * product_fee) + (audit_days * daily_rate)"

            // Applicability
            $table->foreignId('business_type_id')->nullable()->constrained('business_types')->nullOnDelete();
            $table->foreignId('product_type_id')->nullable()->constrained('product_types')->nullOnDelete();
            $table->foreignId('region_id')->nullable()->constrained('regions')->nullOnDelete();

            // Validity Period
            $table->date('effective_from');
            $table->date('effective_until')->nullable();
            $table->boolean('is_active')->default(true);

            // Tax
            $table->boolean('include_tax')->default(true);
            $table->decimal('tax_percentage', 5, 2)->default(11); // PPN 11%

            // Additional Parameters (JSON)
            $table->json('parameters')->nullable();
            // Example: {"product_fee": 100000, "daily_rate": 500000, "minimum_days": 1}

            // Metadata
            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();
            $table->text('notes')->nullable();

            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('fee_type');
            $table->index('config_code');
            $table->index('is_active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fee_configurations');
    }
}
