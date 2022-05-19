<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Busqueda;
use App\Models\Reporte;

class BusquedaController extends Controller
{
    public function index(Request $request)
    {
    	$reportes  = $request->get('nombre_est');
    	
    	$reportes = Reporte::orderBy('id', 'DESC')
    		->Nombre($nombre_est)
    		->paginate(4);

    	return view('home', compact('busquedas'));
    }
}
