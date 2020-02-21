<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveySessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveysession', function (Blueprint $table) {
            $table->engine= 'InnoDB';
            $table->increments('id');
            $table->string('question1')->notnull();
            $table->string('question2')->notnull();
            $table->string('question3')->notnull();
            $table->string('question4')->notnull();
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
        Schema::dropIfExists('surveysession');
    }
}
