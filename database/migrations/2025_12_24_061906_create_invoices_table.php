<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('submission_id')->constrained('submissions')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete(); // Pelaku Usaha
            $table->foreignId('created_by')->constrained('users')->cascadeOnDelete(); // Admin LPH

            // Invoice Details
            $table->string('invoice_number')->unique();
            $table->enum('invoice_type', [
                'down_payment', 'full_payment', 'remaining_payment',
                'surveillance_fee', 're_certification_fee', 'additional_service'
            ])->default('down_payment');
            $table->string('invoice_title');
            $table->text('description')->nullable();

            // Financial Details
            $table->decimal('subtotal', 15, 2)->default(0);
            $table->decimal('tax_percentage', 5, 2)->default(0); // PPN
            $table->decimal('tax_amount', 15, 2)->default(0);
            $table->decimal('discount_percentage', 5, 2)->default(0);
            $table->decimal('discount_amount', 15, 2)->default(0);
            $table->decimal('total_amount', 15, 2)->default(0);
            $table->decimal('paid_amount', 15, 2)->default(0);
            $table->decimal('outstanding_amount', 15, 2)->default(0);

            // Currency
            $table->string('currency', 3)->default('IDR');

            // Line Items (JSON array of items)
            $table->json('line_items')->nullable();
            // Example: [{"description": "Audit Fee", "quantity": 1, "unit_price": 5000000, "amount": 5000000}]

            // Payment Terms
            $table->enum('payment_term', ['immediate', 'net_7', 'net_14', 'net_30', 'custom'])->default('net_14');
            $table->integer('payment_days')->default(14);
            $table->date('due_date');

            // Status
            $table->enum('status', [
                'draft', 'sent', 'viewed', 'partial_payment', 'paid', 'overdue', 'cancelled', 'refunded'
            ])->default('draft');

            // Payment Tracking
            $table->integer('payment_count')->default(0);
            $table->timestamp('first_payment_at')->nullable();
            $table->timestamp('fully_paid_at')->nullable();

            // Down Payment Tracking
            $table->boolean('is_down_payment')->default(false);
            $table->decimal('down_payment_percentage', 5, 2)->nullable();
            $table->foreignId('down_payment_invoice_id')->nullable()->constrained('invoices')->nullOnDelete();
            $table->foreignId('full_invoice_id')->nullable()->constrained('invoices')->nullOnDelete();

            // Invoice Dates
            $table->date('invoice_date');
            $table->timestamp('sent_at')->nullable();
            $table->timestamp('viewed_at')->nullable();
            $table->timestamp('cancelled_at')->nullable();
            $table->text('cancellation_reason')->nullable();

            // Additional Info
            $table->text('notes')->nullable();
            $table->text('terms_conditions')->nullable();
            $table->text('invoice_file_path')->nullable(); // PDF path

            // Bank Account Information for Payment
            $table->string('bank_name')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('bank_account_name')->nullable();

            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('submission_id');
            $table->index('user_id');
            $table->index('invoice_number');
            $table->index('status');
            $table->index('due_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
