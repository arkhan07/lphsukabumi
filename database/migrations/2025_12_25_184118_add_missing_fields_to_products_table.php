<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMissingFieldsToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('variant')->nullable()->after('product_name');
            $table->text('ingredients')->nullable()->after('product_description');
            $table->string('image')->nullable()->after('is_active');
            $table->string('certificate_number')->nullable()->after('halal_notes');
            $table->date('certificate_issue_date')->nullable()->after('certificate_number');
            $table->date('certificate_expiry_date')->nullable()->after('certificate_issue_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'variant',
                'ingredients',
                'image',
                'certificate_number',
                'certificate_issue_date',
                'certificate_expiry_date'
            ]);
        });
    }
}
