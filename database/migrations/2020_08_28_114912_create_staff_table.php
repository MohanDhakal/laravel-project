<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // $table->bigIncrements('id');
    // $table->string('title')->nullable(false);
    // $table->string('content')->nullable(false);
    // $table->string('image_uri')->nullable(true);
    // $table->string('file_uri')->nullable(true);
    // $table->timestamps();

    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable(false);
            $table->string('post')->nullable(false);
            $table->string('description')->nullable(true);
            $table->string('image_uri')->nullable(false);            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
