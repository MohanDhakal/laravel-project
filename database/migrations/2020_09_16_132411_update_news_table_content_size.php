<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateNewsTableContentSize extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('news', function (Blueprint $table) {
            $table->longText('content')->change();
            $table->mediumText('image_uri')->change();
            $table->mediumText('file_uri')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->string('content')->change();
            $table->string('image_uri')->change();
            $table->string('file_uri')->change();
        });
    }
}
