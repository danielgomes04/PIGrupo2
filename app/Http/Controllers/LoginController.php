<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Login;

Class LoginController extends Controller
{
    public function VerLogin(){
        return view('/login');
    }
}