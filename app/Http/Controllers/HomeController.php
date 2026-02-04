<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use App\Models\Pagina;
use illuminate\Support\Facades\App;
USE Yajra\Datatables\Datatables;

class HomeController extends Controller
{
    public function empresa()
    {
        $datos["nombre"]= "Erick Rodriguez Banda";
        $datos["fecha"]="2026-05-15";
        $datos["actividad"]="Desarrollo de Software";
        $datos["description_about"]="Empresa dedicada al desarrlollo de software a la medida de sus clientes";
        $datos["texto_ejemplo"]="Aqui va la descripcion del texto de ejemplo";

        $usuarios=new Pagina();
        $dats["listausuarios"]=$usuarios->ObtenerListado();
        return view('empresa', $datos);
    }    

    public function __invoke() #Este método se llama cuando se usa el controlador como una sola acción
    {
        return view('hello');
    }
    
}
