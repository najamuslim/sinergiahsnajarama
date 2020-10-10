<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registrant;
use App\Exports\RegistrantsExport;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $registrants = Registrant::orderBy('created_at', 'desc')->paginate(25);
        return view('pages.home');
    }

    public function getRegistrants(){
        $registrants = Registrant::orderBy('created_at', 'desc')->paginate(25);
        return view('admin.list-registrant', ['registrants'=>$registrants]);
    }

    /**
     * Export function
     * https://www.mynotepaper.com/laravel-6-import-export-excel-with-heading-using-laravel-excel-31/
     */
    public function export()
    {
        return Excel::download(new RegistrantsExport(), 'Registrants.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
