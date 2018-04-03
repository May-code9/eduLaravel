<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weeks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('week_no');
            $table->integer('content1_id')->nullable();
            $table->integer('content2_id')->nullable();
            $table->integer('content3_id')->nullable();
            $table->integer('content4_id')->nullable();
            $table->integer('content5_id')->nullable();
            $table->integer('content6_id')->nullable();
            $table->integer('course_id');
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
        Schema::dropIfExists('weeks');
    }
}
