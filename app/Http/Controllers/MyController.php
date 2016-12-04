<?php namespace App\Http\Controllers;


class MyController extends Controller
{

    public function index($name = 'user')
    {
        return view('hi')->with('name',$name);
    }

}
