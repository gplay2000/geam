<?php

namespace App\Http\Controllers;

use App\Models\Institucion;
use Illuminate\Http\Request;

/**
 * Class InstitucionController
 * @package App\Http\Controllers
 */
class InstitucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instituciones = Institucion::paginate();

        return view('institucion.index', compact('instituciones'))
            ->with('i', (request()->input('page', 1) - 1) * $instituciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $institucion = new Institucion();
        return view('institucion.create', compact('institucion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Institucion::$rules);

        $institucion = Institucion::create($request->all());

        return redirect()->route('instituciones.index')
            ->with('success', 'institucion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_ins)
    {
        $institucion = Institucion::find($id_ins);

        return view('institucion.show', compact('institucion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $institucion = Institucion::find($id);

        return view('institucion.edit', compact('institucion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Institucion $institucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Institucion $institucion)
    {
        request()->validate(Institucion::$rules);

        $institucion->update($request->all());

        return redirect()->route('instituciones.index')
            ->with('success', 'Institucion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $institucion = institucion::find($id)->delete();

        return redirect()->route('instituciones.index')
            ->with('success', 'Institucion deleted successfully');
    }
}
