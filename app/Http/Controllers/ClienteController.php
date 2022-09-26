<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['clientes']=Cliente::paginate(5);
        return view('cliente.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $campos=[
            'Documento'=> 'required|string|max:100',
            'Nombres'=> 'required|string|max:100',
            'Apellidos'=> 'required|string|max:100',
            'Correo'=> 'required|email',
            'Celular'=> 'required|string|max:100',
            'Ciudad'=> 'required|string|max:100',
            'Direccion'=> 'required|string|max:100',
            'Foto'=> 'required|max:1000|mimes:jpeg,png,jpg',

        ];
        $mensaje=[
               'required'=>'El:attribute es requerido',
               'Foto.required'=>'Lafoto es requerida'
        ];

        $this->validate($request,$campos,$mensaje);

        // $datosCliente = request()->all();
        $datosCliente = request()->except('_token');

        if($request->hasFile('Foto')){
            $datosCliente['Foto']=$request->file('Foto')->store('uploads','public');
        }
        Cliente::insert($datosCliente);

        //  return response()->json($datosCliente);
        return redirect('cliente')->with('mensaje','Cliente agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cliente=Cliente::findOrFail($id);
        return view('cliente.edit', compact('cliente') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { $campos=[
        'Documento'=> 'required|string|max:100',
        'Nombres'=> 'required|string|max:100',
        'Apellidos'=> 'required|string|max:100',
        'Correo'=> 'required|email',
        'Celular'=> 'required|string|max:100',
        'Ciudad'=> 'required|string|max:100',
        'Direccion'=> 'required|string|max:100',

    ];
    $mensaje=[
           'required'=>'El:attribute es requerido',
          
    ];

    if($request->hasFile('Foto')){
       $campos= ['Foto'=> 'required|max:1000|mimes:jpeg,png,jpg'];
       $mensaje=[ 'Foto.required'=>'Lafoto es requerida'];
    }
    $this->validate($request,$campos,$mensaje);

        //
        $datosCliente = request()->except(['_token','_method']);

        if($request->hasFile('Foto')){
            $cliente=Cliente::findOrFail($id);

            Storage::delete('public/'.$cliente->Foto);

            $datosCliente['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Cliente::where('id','=',$id)->update($datosCliente);
        $cliente=Cliente::findOrFail($id);
        // return view('cliente.edit', compact('cliente') );
        return redirect('cliente')->with('mensaje','Cliente Modificado');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $cliente=Cliente::findOrFail($id);

        if(Storage::delete('public/'.$cliente->Foto)){

            Cliente::destroy($id);
        }
        
        return redirect('cliente')->with('mensaje','Cliente Borrado');
    }
}
