<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Despacho;
use App\Models\Municipio;

class DespachoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $despachos = Despacho::paginate();

        return view('admin.despacho.index', compact('despachos'))
            ->with('i', (request()->input('page', 1) - 1) * $despachos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipios= Municipio::pluck('nombreMunicipio', 'id');
        $despacho = new Despacho();
        return view('admin.despacho.create', compact('despacho','municipios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Despacho::$rules);

        $despacho = Despacho::create($request->all());

        return redirect()->route('admin.despachos.index')
            ->with('success', 'Despacho created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $despacho = Despacho::find($id);

        return view('admin.despacho.show', compact('despacho'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $municipios= Municipio::pluck('nombreMunicipio', 'id');
        $despacho = Despacho::find($id);

        return view('admin.despacho.edit', compact('despacho','municipios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Despacho $despacho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Despacho $despacho)
    {
        request()->validate(Despacho::$rules);

        $despacho->update($request->all());

        return redirect()->route('admin.despachos.index')
            ->with('success', 'Despacho updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $despacho = Despacho::find($id)->delete();

        return redirect()->route('admin.despachos.index')
            ->with('success', 'Despacho deleted successfully');
    }
}
