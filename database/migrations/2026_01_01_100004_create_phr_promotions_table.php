<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhrPromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phr_promotions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();

            // Promotion Details
            $table->enum('from_level', ['none', 'phr', 'area_manager', 'regional_manager']);
            $table->enum('to_level', ['phr', 'area_manager', 'regional_manager']);
            $table->enum('promotion_type', ['auto', 'manual'])->default('auto');

            // Achievement Data (snapshot at promotion time)
            $table->integer('pu_referred_count_at_promotion')->default(0);
            $table->integer('phr_recruited_count_at_promotion')->default(0);
            $table->integer('area_managers_count_at_promotion')->default(0);
            $table->integer('province_coverage_percentage')->default(0); // For Regional Manager

            // Approval
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->foreignId('approved_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('approved_at')->nullable();
            $table->text('rejection_reason')->nullable();
            $table->text('notes')->nullable();

            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('user_id');
            $table->index('to_level');
            $table->index('status');
            $table->index('promotion_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phr_promotions');
    }
}
