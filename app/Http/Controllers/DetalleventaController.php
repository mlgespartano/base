<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
//hacemos referencia al modelo categoria
use App\Detalleventa;
//Hacemos referencia a la clase que valida el formulario
use App\Http\Requests\DetalleventaFormRequest;
//creamos una clases para hacer redirigir
use Illuminate\support\Facades\Redirect;
//hacemos referencia aa la clase para manejo de datos 
use DB;



class DetalleventaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //cargamos los datos de la tabla
        if($request)
        {
        $valor=trim($request -> get ('searchText')); 
        $detalleventa=DB::table('detalle_venta') 
        ->where('cantidad','like',"%$valor%") 
        //->where('precio_venta','like',"%$valor%") 
      //  ->where('descuento','like',"%$valor%") 
       
        ->orderBy('iddetalle_venta','asc')

        ->paginate(5);


        return view('almacen.detalleventa.index')
        -> with("detalle_venta",$detalleventa);
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Muestra el formulario de captura
        return view('almacen.detalleventa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DetalleventaFormRequest $request)
    {
        //
        $detalleventa= new Detalleventa;
        $detalleventa->cantidad=$request->get('cantidad');
        $detalleventa->precio_venta=$request->get('precio_venta');
        $detalleventa->descuento=$request->get('descuento');
        $detalleventa->save();
        return Redirect::to('almacen/detalleventa');


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
        //buscar la tabla categoria un registro cuya id sea la que recibe el controlador
        $detalleventa=Detalleventa::findOrFail($id);

        return view('almacen.detalleventa.edit')
        ->with("detalle_venta",$detalleventa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DetalleventaFormRequest $request, $id)
    {
        //
        $detalleventa=detalleventa::findorfail($id);
        $detalleventa->cantidad=$request->get('cantidad');
        $detalleventa->precio_venta=$request->get('precio_venta');
        $detalleventa->descuento=$request->get('descuento');
        $detalleventa->update();
        return Redirect::to('almacen/detalleventa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
            $detalleventa=Detalleventa::findOrfail($id);
           
            $detalleventa->update();

            return Redirect::to('almacen/detalleventa');

    }
}
