<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditorFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auditor_fees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('auditor_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('invoice_id')->constrained('invoices')->cascadeOnDelete();
            $table->foreignId('submission_id')->constrained('submissions')->cascadeOnDelete();

            // Fee Details
            $table->decimal('invoice_amount', 15, 2)->default(0); // Total invoice amount
            $table->decimal('fee_percentage', 5, 2)->default(30); // 30% default
            $table->decimal('fee_amount', 15, 2)->default(0); // Calculated fee (30% of invoice)

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
            $table->index('auditor_id');
            $table->index('invoice_id');
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
        Schema::dropIfExists('auditor_fees');
    }
}
