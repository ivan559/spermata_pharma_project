<?php

namespace App\Http\Controllers;

use App\Medicamentos;
use Illuminate\Http\Request;
use App\Proveedores;
use Illuminate\Support\Facades\DB;
class MedicamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos=Proveedores::get();

        $medicamentos=DB::table('proveedores')

                    ->join('medicamentos','proveedores.id','=','medicamentos.id_proveedor')
                    ->select('proveedores.*','medicamentos.*')
                    ->orderBy('medicamentos.id','DESC')->paginate(3);
        return view('medicamentos.view',compact('medicamentos','datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datos=Proveedores::get();

        return view('medicamentos.insert',compact('datos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosMedicamentos=request()->except('_token');
        if($request->hasFile('foto'))
        {
            $datosMedicamentos['foto']=$request->file('foto')->store('pharmaceutics','public');

        }
        Medicamentos::insert($datosMedicamentos);
      return redirect('/medicamentos/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function show(Medicamentos $medicamentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicamentos $medicamentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
       $datosMedicamento=request()->except(['_token','_method']);
        //$datosCliente=request()->except(['_token','_method']);
        if($request->hasFile('foto'))
        {
           
            Storage::delete('/public/pharmaceutics'.$datosMedicamento->foto);
            $datosCliente['foto']=$request->file('foto')->store('pharmaceutics','public');
        }
       Medicamentos::where('id','=',$id)->update($datosMedicamento);
        $datosMedicamento=Medicamentos::findOrFail($id);
       return redirect('/medicamentos/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Medicamentos::destroy($id);
        return redirect('medicamentos');
    }
}
