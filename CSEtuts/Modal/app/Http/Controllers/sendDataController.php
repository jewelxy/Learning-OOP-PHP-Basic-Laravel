<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\Teacher;
class sendDataController extends Controller
{
  public function sendData(){

    $student = new student();
    $student->sname="Tisha";
    $student->standerd=13;
    $student->save();
      return view('receiveDataFromController');
  }

}
