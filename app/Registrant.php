<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrant extends Model
{
    protected $table = 'simple_registration';
    public $fillable = ['nama_lengkap', 'kelas', 'nisn', 'sekolah_sebelumnya', 'alasan_homeschooling', 'no_hp' ];

    
}
