<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhrPromotionCriteriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phr_promotion_criteria', function (Blueprint $table) {
            $table->id();
            $table->enum('target_level', ['area_manager', 'regional_manager'])->unique();

            // Criteria
            $table->integer('min_pu_referred')->default(30);
            $table->integer('min_phr_recruited')->default(20); // For Area Manager
            $table->integer('min_area_managers')->default(10); // For Regional Manager
            $table->integer('min_province_coverage_percentage')->default(40); // For Regional Manager

            // Active Status
            $table->boolean('is_active')->default(true);
            $table->text('notes')->nullable();

            $table->timestamps();
        });

        // Insert default criteria
        DB::table('phr_promotion_criteria')->insert([
            [
                'target_level' => 'area_manager',
                'min_pu_referred' => 30,
                'min_phr_recruited' => 20,
                'min_area_managers' => 0,
                'min_province_coverage_percentage' => 0,
                'is_active' => true,
                'notes' => 'PHR → Area Manager: 30 PU + 20 PHR aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'target_level' => 'regional_manager',
                'min_pu_referred' => 30,
                'min_phr_recruited' => 0,
                'min_area_managers' => 10,
                'min_province_coverage_percentage' => 40,
                'is_active' => true,
                'notes' => 'Area Manager → Regional Manager: 30 PU pribadi + 10 Area Managers + 40% provinsi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phr_promotion_criteria');
    }
}
