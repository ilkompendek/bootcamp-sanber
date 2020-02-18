<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function welcome(Request $request)
    {
        $fname = $request['first-name'];
        $lname = $request['last-name'];

        $tampil= $fname. " " . $lname;
        //return view('welcome', ['tampil' => $tampil]);
        return view('welcome', compact('tampil'));
    }
}
