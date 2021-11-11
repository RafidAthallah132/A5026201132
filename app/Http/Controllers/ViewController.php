<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showForm()
    {
        return view('showgreetings');
        //code untuk meload data
    }
    function resultGreetings ()
    {
        return view('tugas');
        //code untuk meload data
    }
}
