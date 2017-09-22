<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;


class UserController extends Controller
{
     public function show()
      {
       return view('layouts.demo1',array('user'=> Auth::user()) );
     	}

     public function update_photo(Request $request)
      {
          if($request->hasfile('avatar'))
          {
           $avatar = $request->file('avatar');
           $filename = time(). '.'.$avatar->getClientOriginalExtension();
           Image::make($avatar)->resize(300,300)->save(public_path('uploads/avators/'.$filename));
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
          }
         return view('layouts.demo1',array('user'=> Auth::user()) );
      }

     public function hello()
      {
        $users = DB::table('users')->get();
          echo $users;     
   
      }
      
      public function change()
      {
        return view('layouts.edit');
      }
    
}


 