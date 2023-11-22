<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Return home view.
     */
    public function index()
    {
        return view('home');
    }
}
