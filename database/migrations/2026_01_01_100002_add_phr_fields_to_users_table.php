<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhrFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // PHR Level
            $table->enum('phr_level', ['none', 'phr', 'area_manager', 'regional_manager'])->default('none')->after('referred_by');

            // PHR Stats
            $table->integer('phr_recruited_count')->default(0)->after('phr_level'); // Total PHR yang direkrut
            $table->integer('phr_active_recruited_count')->default(0)->after('phr_recruited_count'); // PHR aktif yang direkrut
            $table->integer('pu_referred_count')->default(0)->after('phr_active_recruited_count'); // Total PU yang direferensikan
            $table->integer('area_managers_count')->default(0)->after('pu_referred_count'); // Total Manajer Area dibawahnya (untuk Regional)

            // PHR Location (for Regional Manager territory calculation)
            $table->string('province')->nullable()->after('area_managers_count');
            $table->string('city')->nullable()->after('province');
            $table->string('district')->nullable()->after('city');

            // PHR Status
            $table->boolean('is_phr_active')->default(false)->after('district');
            $table->timestamp('phr_joined_at')->nullable()->after('is_phr_active');
            $table->timestamp('last_promotion_at')->nullable()->after('phr_joined_at');

            // Recruiter tracking (PHR yang merekrut user ini)
            $table->foreignId('recruited_by_phr')->nullable()->constrained('users')->nullOnDelete()->after('last_promotion_at');
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
            $table->dropForeign(['recruited_by_phr']);
            $table->dropColumn([
                'phr_level',
                'phr_recruited_count',
                'phr_active_recruited_count',
                'pu_referred_count',
                'area_managers_count',
                'province',
                'city',
                'district',
                'is_phr_active',
                'phr_joined_at',
                'last_promotion_at',
                'recruited_by_phr',
            ]);
        });
    }
}
