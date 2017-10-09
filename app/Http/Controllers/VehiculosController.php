<?php

namespace App\Http\Controllers;

use App\Panificadora;
use App\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos= DB::table('vehiculos')
            ->select('panificadoras.nombre as nombre_panificadora','vehiculos.placa','vehiculos.modelo','vehiculos.vehiculo_id')
            ->join('panificadoras','panificadoras.panificadora_id','=','vehiculos.panificadora_id')->get();
        return view('vehiculos/index',compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $panificadoras = Panificadora::all()->pluck('nombre','panificadora_id');
        return view('vehiculos/create',compact('panificadoras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehiculo = new Vehiculo;
        $vehiculo->panificadora_id= $request->select_panificadora;
        $vehiculo->placa= $request->placa;
        $vehiculo->modelo= $request->modelo;
        $vehiculo->save();
        return Redirect::to('vehiculo');
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
        $vehiculo = Vehiculo::find($id);
        $panificadoras = Panificadora::all()->pluck('nombre','panificadora_id');
        return view('vehiculos/edit',compact('panificadoras','vehiculo'));
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
        $vehiculo = Vehiculo::find($id);
        $vehiculo->panificadora_id= $request->select_panificadora;
        $vehiculo->placa= $request->placa;
        $vehiculo->modelo= $request->modelo;
        $vehiculo->save();
        return Redirect::to('vehiculo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo->delete();
        return Redirect::to('vehiculo');
    }
}
