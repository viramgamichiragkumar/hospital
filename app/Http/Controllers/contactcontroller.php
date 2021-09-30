<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use DB;



class contactcontroller extends Controller
{

	 public function contact(Request $request)
    {
         $this->validate($request,[
          'name' => 'required',
          'email' => 'required',
          'subject' => 'required',
          'message' => 'required',
          
          
         
        ],[
          'name.required' => ' The  name field is required.',
          'email.required' => ' The email  field is required.',
          'subject.required' => ' The subject  field is required.',
          'message.required' => ' The message  field is required.',
      
        ]);

    	$contact=new contact();
    	$contact->name=$request->input('name');
    	$contact->email=$request->input('email');
    	$contact->subject=$request->input('subject');
    	$contact->message=$request->input('message');
    	$contact->save();

    	return back()->with('success','Thnks for contact us!');
    	
    }

    public function BasicTable()
    {
       $data=DB::table('contact')->paginate(4);
       return view('admin.contactshow',['data'=>$data]);
    }

      public function delete($id)
    {
        contact::find($id)->delete();
       return redirect('/contactshow');
    }
  
}



