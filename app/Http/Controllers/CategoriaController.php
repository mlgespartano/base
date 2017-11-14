<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
//hacemos referencia al modelo categoria
use App\Categoria;
//Hacemos referencia a la clase que valida el formulario
use App\Http\Requests\CategoriaFormRequest;
//creamos una clases para hacer redirigir
use Illuminate\support\Facades\Redirect;
//hacemos referencia aa la clase para manejo de datos 
use DB;



class CategoriaController extends Controller
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
        $categorias=DB::table('categoria') 
        ->where('nombre','like',"%$valor%") 
        ->where('condicion','=','1')
        ->orderBy('idcategoria','desc')

        ->paginate(5);


        return view('almacen.categoria.index')
        -> with("categoria",$categorias);
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
        return view('almacen.categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriaFormRequest $request)
    {
        //
        $categoria= new Categoria;
        $categoria->nombre=$request->get('nombre');
        $categoria->descripcion=$request->get('descripcion');
        $categoria->condicion='1';
        $categoria->save();
        return Redirect::to('almacen/categoria');


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
        $categoria=Categoria::findOrFail($id);

        return view('almacen.categoria.edit')
        ->with("categoria",$categoria);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriaFormRequest $request, $id)
    {
        //
        $categoria=categoria::findorfail($id);
        $categoria->nombre=$request->get('nombre');
        $categoria->descripcion=$request->get('descripcion');
        $categoria->update();

        return Redirect::to('almacen/categoria');
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
            $categoria=Categoria::findOrfail($id);
            $categoria->condicion='0';
            $categoria->update();

            return Redirect::to('almacen/categoria');

    }
}
