<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{
    public function index()
    {
        $name = 'Laravel Enthusiast'; // Example data
        return view('greet', compact('name'));
    }
}