<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comp_file;

class Comp_file extends Controller
{
    //direct use the model
    public function posted(){
    Comp_file::create(array(
       'c_name'=>Input::get('c_name');
         'c_address'=>Input::get('c_address');
        'c_description'=>Input::get('c_description');
        'c_employs'=>Input::get('c_employs');

    	));
   }
}
