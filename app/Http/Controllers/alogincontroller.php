<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\admin;

use App\ImageGallery;

class alogincontroller extends Controller
{
    public function alogin()
    {
        return view('Admin.alogin');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required |min :3|alpha',
            'password' => 'required |min :3'
        ]);

        $admin =  admin::where('name', $request->name)->first();

        if ($admin != null) {
            $dec = decrypt($admin->password);
            if ($request->password == $dec) {
                session()->put('logged_admin', $admin->name);
                return redirect('/admin');
            } else {
                return $request->validate(['password' => 'confirmed']);
            }
        } else {
            return $request->validate(['name' => 'confirmed']);
        }
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function general()
    {
        return view('admin.general');
    }

    public function buttons()
    {
        return view('admin.buttons');
    }

    public function contact()
    {
        return view('admin.contact');
    }


    /*  public function BasicTable()
    {
    	return view('admin.basic_table');
    }*/




    public function show()
    {
        $images = ImageGallery::get();
        return view('admin.galleryshow', compact('images'));
    }


    /**
     * Upload image function
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $input['image'] = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);


        $input['title'] = $request->title;
        ImageGallery::create($input);


        return back()
            ->with('success', 'Image Uploaded successfully.');
    }


    /**
     * Remove Image function
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ImageGallery::find($id)->delete();
        return back()
            ->with('success', 'Image removed successfully.');
    }
}
