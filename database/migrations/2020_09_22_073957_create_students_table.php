<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id()->autoIncrement(true);
            $table->timestamps();
            $table->text('name')->nullable(false);
            $table->text('address')->nullable(true);
            $table->text('dob')->nullable(false);
            $table->string('category')->nullable(false);
            $table->mediumText('email')->nullable(true);
            $table->integer('class')->nullable(false);
            $table->unsignedInteger('phone')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
