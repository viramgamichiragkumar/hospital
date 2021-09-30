<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageGallery;

class gallerycontroller extends Controller
{
	 
      public function gallery()
    {
        $images = ImageGallery::paginate(9);

        return view('gallery',compact('images'));
    }
}
