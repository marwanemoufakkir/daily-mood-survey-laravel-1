<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('question_1_response');
            $table->integer('question_2_response');
            $table->integer('question_3_response');
            $table->integer('question_4_response');
            $table->integer('question_5_response');
            $table->integer('question_6_response');
            $table->integer('question_7_response');
            $table->integer('question_8_response');
            $table->integer('question_9_response');
            $table->integer('question_10_response');
            $table->integer('question_11_response');
            $table->integer('question_12_response');
            $table->integer('question_13_response');
            $table->integer('question_14_response');
            $table->integer('question_15_response');
            $table->integer('question_16_response');
            $table->integer('question_17_response');
            $table->integer('question_18_response');
            $table->integer('question_19_response');
            $table->integer('question_20_response');
            $table->integer('question_21_response');
            $table->integer('question_22_response');
            $table->integer('question_23_response');
            $table->integer('question_24_response');
            $table->integer('question_25_response');
            $table->integer('question_26_response');
            $table->integer('question_27_response');
            $table->integer('question_28_response');
            $table->integer('question_29_response');
            $table->integer('question_30_response');
            $table->integer('question_31_response');
            $table->integer('question_32_response');
            $table->integer('question_33_response');

            $table->timestamp('time_taken');
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('surveys');
    }
}
