<?php

namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Http\Request;

/**
 * Class GeneralController
 * @package App\Http\Controllers
 */
class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generales = General::paginate();

        return view('general.index', compact('generales'))
            ->with('i', (request()->input('page', 1) - 1) * $generales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $general = new General();
        return view('general.create', compact('general'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(General::$rules);

        $general = General::create($request->all());

        return redirect()->route('generales.index')
            ->with('success', 'General Creada con Exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_gen)
    {
        $general = General::find($id_gen);

        return view('general.show', compact('general'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_gen)
    {
        $general = General::find($id_gen);

        return view('general.edit', compact('general'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  General $general
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, General $general)
    {
        request()->validate(General::$rules);

        $general->update($request->all());

        return redirect()->route('generales.index')
            ->with('success', 'General Actualizada');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id_gen)
    {
        $general = General::find($id_gen)->delete();

        return redirect()->route('generales.index')
            ->with('success', 'General Eliminada');
    }
}
