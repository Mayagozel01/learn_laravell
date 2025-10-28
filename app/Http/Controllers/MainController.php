<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    { $main  = 'This is the main page';
        return view('main', compact('main'));
    }
}
