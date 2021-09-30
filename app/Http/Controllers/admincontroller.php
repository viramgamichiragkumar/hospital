<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use App\admin;

class admincontroller extends Controller
{
    public function admin()
    {
        return view('admin.admin');
    }

}
