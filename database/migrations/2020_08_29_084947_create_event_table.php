<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration
{
    // $table->bigIncrements('id');
    // $table->string('title')->nullable(false);
    // $table->string('content')->nullable(false);
    // $table->string('image_uri')->nullable(true);
    // $table->string('file_uri')->nullable(true);
    // $table->timestamps();

    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->string('title')->nullable(false);
             $table->string('description')->nullable(false);
             $table->date('date')->nullable(false);
             $table->string('time')->nullable(false);
             $table->string('venue')->nullable(false);
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
        Schema::dropIfExists('event');
    }
}
