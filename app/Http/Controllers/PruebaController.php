<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    function index() {
        $title = 'Prueba';
        return view('prueba', compact('title'));
    }

    function saludar() {
        $title = 'Saludar';
        return view('saludar', compact('title'));
    }
}
