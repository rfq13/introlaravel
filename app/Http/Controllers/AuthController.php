<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class AuthController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function welcome(Request $request)
    {
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $fullname = $fname . " $lname";
        return view('welcome', ['name' => $fullname]);
    }
}
