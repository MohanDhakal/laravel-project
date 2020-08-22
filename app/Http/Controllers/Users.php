<?php

namespace App\Http\Controllers;

//to ge the request from apis
use Illuminate\Http\Request;

class users extends Controller
{
    function index()
    {
        return ['name' => "mohan kumar dhakal"];
    }
    function show($name)
    {
        echo 'welcome to the controller, '.$name.' !';
    }
    function getSample(){
        return view('sample',['name'=>'mohan dhakal']);
    }
}
