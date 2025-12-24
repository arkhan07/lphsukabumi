<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('production_processes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('submission_id')->constrained('submissions')->cascadeOnDelete();
            $table->foreignId('product_id')->nullable()->constrained('products')->nullOnDelete();

            // Process Details
            $table->string('process_name');
            $table->text('process_description');
            $table->integer('step_order')->default(0);
            $table->enum('process_type', [
                'preparation', 'mixing', 'cooking', 'processing',
                'packaging', 'storage', 'distribution', 'other'
            ])->default('processing');

            // Equipment and Tools
            $table->text('equipment_used')->nullable();
            $table->text('tools_used')->nullable();

            // Halal Critical Points
            $table->boolean('is_critical_point')->default(false);
            $table->text('critical_point_description')->nullable();
            $table->text('control_measures')->nullable();

            // Materials Used in This Process
            $table->json('materials_used')->nullable(); // Array of material IDs

            // Process Parameters
            $table->string('temperature_range')->nullable();
            $table->string('duration')->nullable();
            $table->text('special_conditions')->nullable();

            // Documentation
            $table->text('process_document_path')->nullable();
            $table->text('flow_chart_path')->nullable();

            // Verification
            $table->boolean('is_verified')->default(false);
            $table->foreignId('verified_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('verified_at')->nullable();
            $table->text('verification_notes')->nullable();

            // Additional Info
            $table->text('remarks')->nullable();
            $table->boolean('is_active')->default(true);

            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('submission_id');
            $table->index('product_id');
            $table->index('is_critical_point');
            $table->index('step_order');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('production_processes');
    }
}
