<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proceso;
use App\Models\Despacho;
use App\Models\Jurisdiccion;
use App\Models\EstadoProceso;
use App\Models\TipoProceso;
use App\Models\EtapaProcesal;

class ProcesoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procesos = Proceso::paginate();

        return view('admin.proceso.index', compact('procesos'))
            ->with('i', (request()->input('page', 1) - 1) * $procesos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $despachos= Despacho::pluck('nombreDespacho', 'id');
        $jurisdicciones= Jurisdiccion::pluck('nombre', 'id');
        $estadoprocesos= EstadoProceso::pluck('nombre', 'id');
        $tipoprocesos= TipoProceso::pluck('nombre', 'id');
        $etapasprocesal= EtapaProcesal::pluck('nombre', 'id');
        $proceso = new Proceso();
        return view('admin.proceso.create', compact('proceso','despachos','jurisdicciones', 'estadoprocesos','tipoprocesos','etapasprocesal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Proceso::$rules);

        $proceso = Proceso::create($request->all());

        return redirect()->route('admin.procesos.index')
            ->with('success', 'Proceso created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proceso = Proceso::find($id);
        
        return view('admin.proceso.show', compact('proceso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $despachos= Despacho::pluck('nombreDespacho', 'id');
        $jurisdicciones= Jurisdiccion::pluck('nombre', 'id');
        $estadoprocesos= EstadoProceso::pluck('nombre', 'id');
        $tipoprocesos= TipoProceso::pluck('nombre', 'id');
        $etapasprocesal= EtapaProcesal::pluck('nombre', 'id');
        $proceso = Proceso::find($id);

        return view('admin.proceso.edit', compact('proceso','despachos','jurisdicciones', 'estadoprocesos','tipoprocesos','etapasprocesal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Proceso $proceso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proceso $proceso)
    {
        request()->validate(Proceso::$rules);

        $proceso->update($request->all());

        return redirect()->route('admin.procesos.index')
            ->with('success', 'Proceso updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $proceso = Proceso::find($id)->delete();

        return redirect()->route('admin.procesos.index')
            ->with('success', 'Proceso deleted successfully');
    }
}
