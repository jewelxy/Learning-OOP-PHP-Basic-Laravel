@extends('layout/master')

@section('body')
    <h1>Receive Data From Controller</h1>
    <?php 
        print_r($mySubject);
        echo "<br/>";
        print_r($myMarks);
        echo "<br/>";

    ?>


<?php
    echo "<hr/>";
     //if else conndition
     $u="Data not found";
     $data="jewel";
 ?>
    @if($data=="Hello")
        {{$data}}
    @elseif($data=="Hi")
        {{$data}}
    @else
        {{$u}}
    @endif


@endsection


