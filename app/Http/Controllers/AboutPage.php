<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutPage extends Controller
{
    public function index()
    {
        return view('about');
    }
}
