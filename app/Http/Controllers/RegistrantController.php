<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registrant;


class RegistrantController extends Controller
{
    public function createUserForm(Request $req) {
        return view('pages.registrationform');
    }

    public function save(Request $req){

        // Form validation
        $this->validate($req, [
            'nama_lengkap' => 'required',
            'kelas' => 'required',
            'nisn' => 'required',
            'sekolah_sebelumnya' => 'required',
            'alasan_homeschooling' => 'required',
            'no_hp' => 'required'
        ]);


        $registrant = new Registrant;
        $registrant->nama_lengkap =$req->nama_lengkap;
        $registrant->kelas = $req->kelas;
        $registrant->nisn = $req->nisn;
        $registrant->sekolah_sebelumnya = $req->sekolah_sebelumnya;
        $registrant->alasan_homeschooling = $req->alasan_homeschooling;
        $registrant->no_hp = $req->no_hp;
        $registrant->save();

        return back()->with('success', 'Your form has been submitted.');
        //return view('pages.registrationform');
    }

    public function getRegistrants(){
        $registrants = Registrant::orderBy('created_at', 'desc')->paginate(25);
        return view('pages.listregistrant',['registrants'=>$registrants]);
    }
}
