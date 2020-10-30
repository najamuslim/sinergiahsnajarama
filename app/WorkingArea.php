<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkingArea extends Model
{
    protected $table = 'working_area';
    public $fillable = ['working_area_name'];
    public $timestamps = false;
}
