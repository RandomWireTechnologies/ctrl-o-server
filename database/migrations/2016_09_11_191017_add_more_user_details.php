<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreUserDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // 
            $table->string('company')->nullable()->after('password');
            $table->string('phone',16)->after('company');
            $table->string('address_street')->after('phone');
            $table->string('address_unit',32)->nullable('')->after('address_street');
            $table->string('address_city',64)->after('address_unit');
            $table->string('address_state',2)->after('address_city');
            $table->string('address_zipcode',10)->after('address_state');
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
            //
            $table->dropColumn('company');
            $table->dropColumn('phone');
            $table->dropColumn('address_street');
            $table->dropColumn('address_unit');
            $table->dropColumn('address_city');
            $table->dropColumn('address_state');
            $table->dropColumn('address_zipcode');
        });
    }
}
