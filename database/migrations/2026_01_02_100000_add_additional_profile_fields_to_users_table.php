<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalProfileFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Profile fields
            $table->text('address')->nullable()->after('profile_photo');
            $table->string('business_name')->nullable()->after('address'); // For Pelaku Usaha

            // Bank account fields (for PHR fee payments)
            $table->string('bank_name')->nullable()->after('business_name');
            $table->string('bank_account_number')->nullable()->after('bank_name');
            $table->string('bank_account_holder')->nullable()->after('bank_account_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'address',
                'business_name',
                'bank_name',
                'bank_account_number',
                'bank_account_holder',
            ]);
        });
    }
}
