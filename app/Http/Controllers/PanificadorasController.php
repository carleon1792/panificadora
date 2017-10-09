<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Panificadora;
use Illuminate\Support\Facades\Redirect;

class PanificadorasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $panificadoras = Panificadora::all();
        return view('panificadora/index',compact('panificadoras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panificadora/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $panificadora = new Panificadora;
        $panificadora->nombre = $request->nombre;
        $panificadora->direccion = $request->direccion;
        $panificadora->telefono = $request->telefono;
        $panificadora->horario_atencion = $request->horario_atencion;
        $panificadora->save();

        return Redirect::to('panificadora');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $panificadora  = Panificadora::find($id);
        return view('panificadora/edit',compact('panificadora'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd('llego ');
        $panificadora  = Panificadora::find($id);
        $panificadora->nombre = $request->nombre;
        $panificadora->direccion = $request->direccion;
        $panificadora->telefono = $request->telefono;
        $panificadora->horario_atencion = $request->horario_atencion;
        $panificadora->save();
        return Redirect::to('panificadora');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $panificadora  = Panificadora::find($id);
        $panificadora->delete();
        return Redirect::to('panificadora');
    }
}
