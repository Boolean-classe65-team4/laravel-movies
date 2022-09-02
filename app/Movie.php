<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $fillable = ['id','title','overview','thumb','rating','running_time','release_date','language',];
}
