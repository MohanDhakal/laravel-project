<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function account(Request $req)
    {
        return $req->method();
    }

    function validateForm(Request $req)
    {
        $req->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ]
        );
        return $req->input();
    }
}
