<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeeDistributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_distributions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_payment_id')->constrained('invoice_payments')->cascadeOnDelete();
            $table->foreignId('invoice_id')->constrained('invoices')->cascadeOnDelete();
            $table->foreignId('submission_id')->constrained('submissions')->cascadeOnDelete();

            // Distribution Details
            $table->string('distribution_number')->unique();
            $table->decimal('total_amount', 15, 2); // Total payment received
            $table->date('distribution_date');

            // Distribution to Parties
            // LPH Share
            $table->decimal('lph_percentage', 5, 2)->default(0);
            $table->decimal('lph_amount', 15, 2)->default(0);

            // Auditor Share
            $table->foreignId('auditor_id')->nullable()->constrained('users')->nullOnDelete();
            $table->decimal('auditor_percentage', 5, 2)->default(0);
            $table->decimal('auditor_amount', 15, 2)->default(0);

            // Manajer Teknis Share
            $table->foreignId('manajer_teknis_id')->nullable()->constrained('users')->nullOnDelete();
            $table->decimal('manajer_teknis_percentage', 5, 2)->default(0);
            $table->decimal('manajer_teknis_amount', 15, 2)->default(0);

            // Penyedia Halal Share (if applicable)
            $table->foreignId('penyedia_halal_id')->nullable()->constrained('users')->nullOnDelete();
            $table->decimal('penyedia_halal_percentage', 5, 2)->default(0);
            $table->decimal('penyedia_halal_amount', 15, 2)->default(0);

            // Other Distributions (JSON array)
            $table->json('other_distributions')->nullable();
            // Example: [{"recipient": "BPJPH", "percentage": 10, "amount": 500000, "notes": "Processing fee"}]

            // Verification
            $table->decimal('total_distributed', 15, 2)->default(0);
            $table->decimal('remaining_amount', 15, 2)->default(0);

            // Status
            $table->enum('status', [
                'pending', 'calculated', 'approved', 'disbursed', 'completed'
            ])->default('pending');

            // Approval
            $table->foreignId('approved_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('approved_at')->nullable();
            $table->text('approval_notes')->nullable();

            // Disbursement
            $table->timestamp('disbursed_at')->nullable();
            $table->text('disbursement_reference')->nullable();
            $table->text('disbursement_notes')->nullable();

            // Metadata
            $table->foreignId('created_by')->constrained('users')->cascadeOnDelete();
            $table->text('notes')->nullable();

            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('invoice_payment_id');
            $table->index('invoice_id');
            $table->index('submission_id');
            $table->index('distribution_number');
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
        Schema::dropIfExists('fee_distributions');
    }
}
