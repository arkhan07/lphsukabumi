<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSubmissionFormFieldsToSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('submissions', function (Blueprint $table) {
            // Section A: Identitas Pelaku Usaha
            $table->string('owner_name')->nullable()->after('user_id');
            $table->enum('business_scale', ['Mikro', 'Kecil', 'Menengah', 'Besar'])->nullable()->after('nib');

            // Section B: Informasi Usaha dan Layanan
            $table->string('service_type')->nullable()->after('business_type_id');
            $table->string('product_type')->nullable()->after('service_type');
            $table->integer('product_count')->nullable()->after('product_type');
            $table->integer('production_site_count')->nullable()->after('product_count');
            $table->integer('branch_count')->nullable()->after('production_site_count');

            // Section D: Penyelia Halal dan Referensi
            $table->boolean('has_halal_supervisor')->default(false)->after('notes');
            $table->string('referral_source')->nullable()->after('has_halal_supervisor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('submissions', function (Blueprint $table) {
            $table->dropColumn([
                'owner_name',
                'business_scale',
                'service_type',
                'product_type',
                'product_count',
                'production_site_count',
                'branch_count',
                'has_halal_supervisor',
                'referral_source',
            ]);
        });
    }
}
