<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhrFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phr_fees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('phr_id')->constrained('users')->cascadeOnDelete(); // PHR yang dapat fee
            $table->foreignId('invoice_id')->constrained('invoices')->cascadeOnDelete();
            $table->foreignId('pelaku_usaha_id')->constrained('users')->cascadeOnDelete(); // PU yang bayar invoice
            $table->foreignId('submission_id')->nullable()->constrained('submissions')->cascadeOnDelete();

            // Fee Details
            $table->decimal('invoice_amount', 15, 2)->default(0); // Total invoice amount
            $table->enum('fee_type', ['direct', 'downline', 'regional'])->default('direct');
            // direct = 10% (PHR yang referensi langsung PU)
            // downline = 3% (Manajer Area dari PHR dibawahnya)
            // regional = 2% (Manajer Regional dari Manajer Area dibawahnya)

            $table->decimal('fee_percentage', 5, 2)->default(10); // 10%, 3%, atau 2%
            $table->decimal('fee_amount', 15, 2)->default(0); // Calculated fee

            // Tracking upline chain
            $table->foreignId('direct_phr_id')->nullable()->constrained('users')->nullOnDelete(); // PHR yang referensi PU
            $table->foreignId('area_manager_id')->nullable()->constrained('users')->nullOnDelete(); // Manajer Area
            $table->foreignId('regional_manager_id')->nullable()->constrained('users')->nullOnDelete(); // Manajer Regional

            // Payment Status
            $table->enum('status', ['pending', 'approved', 'paid', 'cancelled'])->default('pending');
            $table->decimal('paid_amount', 15, 2)->default(0);
            $table->timestamp('approved_at')->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->foreignId('approved_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('paid_by')->nullable()->constrained('users')->nullOnDelete();

            // Additional Info
            $table->text('notes')->nullable();
            $table->string('payment_reference')->nullable();

            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('phr_id');
            $table->index('invoice_id');
            $table->index('pelaku_usaha_id');
            $table->index('fee_type');
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phr_fees');
    }
}
