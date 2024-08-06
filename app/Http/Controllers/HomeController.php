<?php

namespace App\Http\Controllers;

use Iluminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("home");
    }
}