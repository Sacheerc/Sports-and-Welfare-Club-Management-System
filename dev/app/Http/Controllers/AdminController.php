<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        if(Auth::user()->role()=="Admin")
            return view('adminHome');
        if(Auth::user()->role()=="President")
            return view('presidentHome');
        if(Auth::user()->role()=="VicePresident")
            return view('vicePresidentHome');
        if(Auth::user()->role()=="Secretary")
            return view('secretaryHome');
        if(Auth::user()->role()=="Treasurer")
            return view('treasurerHome');
    }
}
