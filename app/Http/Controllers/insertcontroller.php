<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\insert;
use DB;

class insertcontroller extends Controller
{
    public function insert(Request $request)
    {
        $insert = new insert();

        $insert->name=$request->input('name');
        $insert->lastname=$request->input('lastname');
        $insert->address=$request->input('address');
        $insert->save();

        return redirect('/insert');
    }
	
}
