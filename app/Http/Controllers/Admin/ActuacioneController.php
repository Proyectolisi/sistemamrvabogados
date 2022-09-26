<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Actuacione;
use Illuminate\Support\Facades\Storage;
use App\Models\Proceso;
use App\Models\TipoActuacione;


class ActuacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actuaciones = Actuacione::paginate();

        return view('admin.actuacione.index', compact('actuaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $actuaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $procesos= Proceso::pluck('numero_radicado', 'id');
        $tipoactuaciones= TipoActuacione::pluck('nombre', 'id');
        $actuacione = new Actuacione();
        return view('admin.actuacione.create', compact('actuacione','procesos','tipoactuaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actuacione = new Actuacione;

        $file=$request->file;
		        
	    $filename=time().'.'.$file->getClientOriginalExtension();

		        $request->file->move('assets',$filename);

		        $actuacione->file=$filename;

		        $actuacione->fecha_actuacion=$request->fecha_actuacion;
		        $actuacione->tipo_actuacion_id=$request->tipo_actuacion_id;
                $actuacione->proceso_id=$request->proceso_id;
                $actuacione->anotacion=$request->anotacion;
                $actuacione->fecha_inicio_termino=$request->fecha_inicio_termino;
                $actuacione->fecha_finaliza_termino=$request->fecha_finaliza_termino;
                $actuacione->fecha_registro=$request->fecha_registro;
                $actuacione->user_id=$request->user_id;

		        $actuacione->save();

        return redirect()->route('admin.actuaciones.index')
            ->with('success', 'Actuacion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actuacione = Actuacione::find($id);

        return view('admin.actuacione.show', compact('actuacione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $procesos= Proceso::pluck('numero_radicado', 'id');
        $tipoactuaciones= TipoActuacione::pluck('nombre', 'id');
        $actuacione = Actuacione::find($id);

        return view('admin.actuacione.edit', compact('actuacione','procesos','tipoactuaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Actuacione $actuacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actuacione $actuacione)
    {
        request()->validate(Actuacione::$rules);

        $actuacione->update($request->all());

        return redirect()->route('admin.actuaciones.index')
            ->with('success', 'Actuacione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $actuacione = Actuacione::find($id)->delete();

        return redirect()->route('admin.actuaciones.index')
            ->with('success', 'Actuacione deleted successfully');
    }

    public function download(Request $request, $file)
    {
        return response()->download(public_path('assets/'.$file));
    }

    public function view($id)
    {
        
        $actuacione = Actuacione::find($id);
        return view('\actuacione\viewpdf', compact('actuacione'));
    }
}
