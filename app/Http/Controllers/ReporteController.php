<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use App\Models\Institucion;
use Illuminate\Http\Request;
use App\Imports\ReportesImport;
use Maatwebsite\Excel\Facades\Excel;

/**
 * Class ReporteController
 * @package App\Http\Controllers
 */
class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reportes = Reporte::paginate();
        $instituciones = institucion::pluck('nombre_ins','id_ins');

        return view('reporte.index', compact('reportes','instituciones'))
        
            ->with('i', (request()->input('page', 1) - 1) * $reportes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reporte = new Reporte();
        $instituciones = institucion::pluck('nombre_ins','id_ins');
       
        return view('reporte.create', compact('reporte','instituciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //request()->validate(Reporte::$rules);
       //request()->validate($request->file('import_file')::$rules);
        

        $file = $request->file('import_file');
       
        Excel::import(new ReportesImport, $file);
        return redirect()->route('reportes.index')
            ->with('success', 'Reporte Creado con Exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reporte = reporte::find($id);

        $instituciones = institucion::pluck('nombre_ins','id_ins');

        return view('reporte.show', compact('reporte','instituciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reporte = reporte::find($id);
          
        $instituciones = institucion::pluck('nombre_ins','id_ins');

        return view('reporte.edit', compact('reporte','instituciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Reporte $reporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reporte $reporte)
    {
        request()->validate(Reporte::$rules);

        $reporte->update($request->all());

        return redirect()->route('reportes.index')
            ->with('success', 'Reporte Actualizado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $reporte = Reporte::find($id)->delete();

        return redirect()->route('reportes.index')
            ->with('success', 'Reporte Eliminado');
    }
}
