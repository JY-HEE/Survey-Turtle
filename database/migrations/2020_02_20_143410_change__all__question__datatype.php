<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeAllQuestionDatatype extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('survey_sessions', function (Blueprint $table) {
            $table->string('question1')->notnull()->change();
            $table->string('question2')->notnull()->change();
            $table->string('question3')->notnull()->change();
            $table->string('question4')->notnull()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('survey_sessions', function (Blueprint $table) {
            //
        });
    }
}
