<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class doctorscontroller extends Controller
{

	 public function doctors()
    {
    	return view ('doctors');
    }
  
}
