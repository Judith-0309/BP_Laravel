<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //méthode index qui charge une vue nommée home
    public function index()
    {
        return view('home');
    }
}
