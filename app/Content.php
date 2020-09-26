<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';
    public $fillable = ['title', 'short_description', 'long_description', 'category' ];

    
}
