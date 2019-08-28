<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['clientes']=Clientes::paginate(5);
        return view('clientes.view',$datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clientes.insert');
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
            'nombre_apellido'=>'required|string|max:20',
            'tipo_identificacion'=>'required',
            'documento'=>'required|string|max:10',
            'direccion'=>'required|string|max:100',
            'email'=>'required|email',
            'telefono'=>'required|string|max:10',
            'foto'=>'required|max:1000|mimes:jpeg,png,jpg,gif,tiff'
        ];
        $mensaje=["required"=>'El atributo :attribute es requerido',"mimes"=>'Solo se permiten los siguientes formatos:JPEG,PNG,GIF,TIF'];
        $this->validate($request,$campos,$mensaje);
        //$datosCliente=request()->all();
        $datosCliente=request()->except('_token');
        if($request->hasFile('foto'))
        {
            $datosCliente['foto']=$request->file('foto')->store('uploads','public');
        }
        Clientes::insert($datosCliente);
        //return response()->json($datosCliente);
        return redirect('/clientes/')->with('Mensaje','Cliente Registrado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(Clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit(Clientes $clientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosCliente=request()->except(['_token','_method']);
        //$datosCliente=request()->except(['_token','_method']);
        if($request->hasFile('foto'))
        {
            $datos=Clientes::findOrFail($id);
            Storage::delete('/public/'.$datos->foto);
            $datosCliente['foto']=$request->file('foto')->store('uploads','public');
        }
       Clientes::where('id','=',$id)->update($datosCliente);
       return redirect('/clientes/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Clientes::destroy($id);
        return redirect('clientes');
    }
}
