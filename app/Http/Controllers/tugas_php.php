<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tugas_php extends Controller
{
    //
    function halamankalkulator()
    {
        return view('halaman_awal_kalkulator');
        //code untuk meload data
    }
    function hasilperhitungan ()
    {
        return view('hasilphp');
        //code untuk meload data
    }
}
