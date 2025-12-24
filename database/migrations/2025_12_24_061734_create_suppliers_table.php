<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('submission_id')->constrained()->onDelete('cascade');

            $table->string('supplier_name');
            $table->string('supplier_code')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->string('country')->default('Indonesia');

            // Registration & Certificates
            $table->string('business_license')->nullable();
            $table->string('halal_certificate_number')->nullable();
            $table->date('halal_certificate_expiry')->nullable();
            $table->enum('halal_certification_body', [
                'MUI',
                'JAKIM',
                'MUIS',
                'GCC',
                'Other',
                'None'
            ])->nullable();

            // Supplier Type
            $table->enum('supplier_type', [
                'manufacturer',
                'distributor',
                'importer',
                'local_producer',
                'other'
            ])->default('manufacturer');

            // Verification Status
            $table->enum('verification_status', ['pending', 'verified', 'rejected'])->default('pending');
            $table->foreignId('verified_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('verified_at')->nullable();
            $table->text('verification_notes')->nullable();

            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->index('submission_id');
            $table->index('verification_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
