<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveySession extends Model
{
    protected $fillable = [
        'question1',
        'question2',
        'question3',
        'question4',
    ];
}
