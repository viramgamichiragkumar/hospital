<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class patientscontroller extends Controller
{
    //
    function patients(){
        return view('admin.patients');
    }
    function addpatients(){
        return view('admin.addpatients');
    }
}
