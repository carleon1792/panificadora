<?php

namespace App\Http\Controllers;

use App\Panificadora;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $productos = DB::table('productos')
            ->select('panificadoras.nombre as nombre_panificadora','productos.tipo','productos.precio','productos.producto_id')
            ->join('panificadoras','panificadoras.panificadora_id','=','productos.panificadora_id')->get();
        return view('productos/index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $panificadoras = Panificadora::all()->pluck('nombre','panificadora_id');
        return view('productos/create',compact('panificadoras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto;
        $producto->panificadora_id= $request->select_panificadora;
        $producto->tipo= $request->tipo;
        $producto->precio= $request->precio;
        $producto->save();
        return Redirect::to('producto');
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
        $producto = Producto::find($id);
        $panificadoras = Panificadora::all()->pluck('nombre','panificadora_id');
        return view('productos/edit',compact('panificadoras','producto'));
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
        $producto = Producto::find($id);
        $producto->panificadora_id= $request->select_panificadora;
        $producto->tipo= $request->tipo;
        $producto->precio= $request->precio;
        $producto->save();
        return Redirect::to('producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return Redirect::to('producto');
    }
}
