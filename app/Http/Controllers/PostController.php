<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function Mensaje() #Método que devuelve un mensaje
    {
        return "Hola desde el método Mensaje del PostController";
    }       

    public function About($param=null, $nombre=null) #Método que recibe parámetros opcionales
    {
        $datos=[
            'parametro' => $param,
            'nombre' => $nombre
        ];;
        return view('about', $datos);
        //Esto devolvería la vista about.blade.php con los datos pasados
    }

    public function Contacto() #Método que devuelve la vista contact
    {
        return view('contact', ['mensaje' => 'Esto es un mensaje']);
    }
}
