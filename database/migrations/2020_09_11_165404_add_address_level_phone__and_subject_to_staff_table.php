<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAddressLevelPhoneAndSubjectToStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('staff', function (Blueprint $table) {
            $table->string('address')->nullable()->after('post');
            $table->string('level')->nullable()->after('address');
            $table->string('subject')->nullable()->after('level');
            $table->string('phone')->nullable()->after('subject');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('staff', function (Blueprint $table) {
            $table->dropColumn(['address',  'level', 'subject', 'phone']);
        });
    }
}
