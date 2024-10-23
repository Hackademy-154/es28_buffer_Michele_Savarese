<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Route;

class PublicController extends Controller
{
    public function home()
    {
        return view("welcome");
    }
    public function contactUs()
    {
        return view('contactUS');
    }
    public function contactUsSubmit(Request $request)
    {
        // dd(vars: $request->all());
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        dd($name, $email, $message);
    }
}
