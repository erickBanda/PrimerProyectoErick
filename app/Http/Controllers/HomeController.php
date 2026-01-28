<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() #Este método se llama cuando se usa el controlador como una sola acción
    {
        return view('hello');
    }
}
