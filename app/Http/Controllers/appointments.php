<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class appointments extends Controller
{
    //
    function add(){
        return view('admin.addpatients');
    }
}
