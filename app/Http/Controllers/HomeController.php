<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Muestra la vista principal del sistema.
     */
    public function index()
    {
        return view('home');
    }
}
