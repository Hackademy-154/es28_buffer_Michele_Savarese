<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BurgerController extends Controller
{
    public function index(){
$burgerList=[
[
    'id'=>1,
    'name'=>'babybirba',
    'type'=>'chicken',
    'price'=>5,
    'img'=>'https://picsum.photos/200/300'
],
[
    'id'=>2,
    'name'=>'satan',
    'type'=>'vegan',
    'price'=>15,
    'img'=>'https://picsum.photos/200/300'
],
[
    'id'=>3,
    'name'=>'Queen',
    'type'=>'beef',
    'price'=>9,
    'img'=>'https://picsum.photos/200/300'
],

[
    'id'=>4,
    'name'=>'attentionQueen',
    'type'=>'glutenfree',
    'price'=>18,
    'img'=>'https://picsum.photos/200/300'
],

];
return view('burger.index',['burgers'=>[''=>$burgerList]]);

    }
    //
}
