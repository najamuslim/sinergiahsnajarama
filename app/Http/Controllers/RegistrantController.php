<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registrant;


class RegistrantController extends Controller
{
    function save(Request $req){
        $registrant = new Registrant;
        $registrant->nama_lengkap =$req->nama_lengkap;
        $registrant->kelas = $req->kelas;
        $registrant->nisn = $req->nisn;
        $registrant->sekolah_sebelumnya = $req->sekolah_sebelumnya;
        $registrant->alasan_homeschooling = $req->alasan_homeschooling;
        $registrant->no_hp = $req->no_hp;
        $registrant->save();
        return view('pages.registrationform');
    }
}
