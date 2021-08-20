<?php

//using namespace from controller class

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


    class HelloController extends Controller{
        public function index($firstName){

            return view('hello')." ".$firstName;
        }

    }
?>