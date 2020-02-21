<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey_Session extends Model
{
    protected $fillable = [
        'question1',
        'question2',
        'question3',
        'question4',
    ];
}


