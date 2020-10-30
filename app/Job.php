<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'job';
    public $fillable = ['job_name'];
    public $timestamps = false;
}