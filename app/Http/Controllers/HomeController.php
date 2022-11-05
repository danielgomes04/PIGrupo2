<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    public function MostrarHome()
    {
        return view('home');
    }
}