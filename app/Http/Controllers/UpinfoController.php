<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UpInfo;
use DB;


class UpinfoController extends Controller
{
    
    public function test(Request $req)
    {
       //insert the record in up_info....
        $var1=$req->input('name');
        $var2=$req->input('address');
        $var3=$req->input('detail');
        $var4=$req->input('employ');

      $data=array('name'=>$var1,'address'=>$var2,'detial'=>$var3,'employ'=>$var4);
      DB::table('up_info')->insert($data);
      echo 'successfull inserted the data';
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // uses the model Upinfo
        $result = UpInfo::get();
        echo $result;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
