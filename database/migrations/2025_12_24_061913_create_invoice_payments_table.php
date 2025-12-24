<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id')->constrained('invoices')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete(); // Who made the payment
            $table->foreignId('verified_by')->nullable()->constrained('users')->nullOnDelete(); // Admin who verified

            // Payment Details
            $table->string('payment_number')->unique();
            $table->decimal('amount', 15, 2);
            $table->string('currency', 3)->default('IDR');

            // Payment Method
            $table->enum('payment_method', [
                'bank_transfer', 'cash', 'check', 'credit_card',
                'virtual_account', 'e_wallet', 'other'
            ])->default('bank_transfer');

            // Bank Transfer Details
            $table->string('bank_name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('account_holder_name')->nullable();
            $table->string('transfer_reference_number')->nullable();

            // Payment Date
            $table->date('payment_date');
            $table->timestamp('payment_time')->nullable();

            // Payment Proof
            $table->text('payment_proof_path')->nullable(); // Path to uploaded receipt/proof
            $table->text('notes')->nullable();

            // Verification Status
            $table->enum('status', [
                'pending', 'verified', 'rejected', 'cancelled'
            ])->default('pending');
            $table->timestamp('verified_at')->nullable();
            $table->text('verification_notes')->nullable();
            $table->text('rejection_reason')->nullable();

            // Receipt
            $table->text('receipt_file_path')->nullable();
            $table->boolean('receipt_sent')->default(false);
            $table->timestamp('receipt_sent_at')->nullable();

            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('invoice_id');
            $table->index('user_id');
            $table->index('payment_number');
            $table->index('status');
            $table->index('payment_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_payments');
    }
}
