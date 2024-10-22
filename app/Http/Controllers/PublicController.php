<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Route;

class PublicController extends Controller
{
 public function home(){
    return view("welcome");
 }
}
