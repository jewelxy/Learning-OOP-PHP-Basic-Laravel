<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sendDataController extends Controller
{
    public function sendData(){

        $subjects=['Maths','Physics','Chemistry'];
        $marks=[50,60,40];
      return view('receiveDataFromController')->
      with(['mySubject'=>$subjects,'myMarks'=>$marks]);
      
    }


    /*

    {{$data}} //It will not run the script
    {!!$data !!} //It will run the script
    @{{$data}} //To tell the laravel that this is the not part of laravel

    */

    //if else

    //{{isset($data) ? $data: 'Data not founnd'}}

    //{{$data or 'DATA NOT FOUND'}}
}
