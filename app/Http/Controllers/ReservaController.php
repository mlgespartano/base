<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ReservaFormRequest;
use App\Reserva;
use DB;

class ReservaController extends Controller
{
    public function __construct()
    {
       
    }
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $reserva=DB::table('reserva')
            ->where('nombre_cliente','LIKE','%'.$query.'%')
            ->where('estado','=','activo')
            ->orderBy('id_reserva','asc')
            ->paginate(10);

            return view('recepcionista.solicitud.index')
       -> with("reserva",$reserva);
        }
    }
    public function create()
    {
        return view("recepcionista.solicitud.create");
    }
    public function store (ReservaFormRequest $request)
    {
        $reserva=new Reserva;
        $reserva->tipo_reser=$request->get('tipo_reser');
        $reserva->nombre_cliente=$request->get('nombre_cliente');
        $reserva->tel=$request->get('tel');
        $reserva->correo=$request->get('correo');
        $reserva->fecha=$request->get('fecha');
        $reserva->hora=$request->get('hora');
        $reserva->num_pax=$request->get('num_pax');
        $reserva->direccion_banquete=$request->get('direccion_banquete');
        $reserva->estado='activo';
        $reserva->save();
        return Redirect::to('recepcionista/solicitud');

    }
    public function show($id)
    {
       
    }
    public function edit($id)
    {

    $reserva=Reserva::findOrFail($id);

        return view("recepcionista.solicitud.edit")
        ->with("reserva",$reserva);
    }
    
    
    public function update(ReservaFormRequest $request,$id)
    {
        $reserva=Reserva::findOrFail($id);

       $reserva->tipo_reser=$request->get('tipo_reser');
        $reserva->nombre_cliente=$request->get('nombre_cliente');
        $reserva->tel=$request->get('tel');
        $reserva->correo=$request->get('correo');
        $reserva->fecha=$request->get('fecha');
        $reserva->hora=$request->get('hora');
        $reserva->num_pax=$request->get('num_pax');
        $reserva->direccion_banquete=$request->get('direccion_banquete');
        $reserva->update();
        return Redirect::to('recepcionista/solicitud');
    }
    public function destroy($id)
    {
        $reserva=Reserva::findOrFail($id);
        $reserva->estado='desactivo';
        $reserva->update();
        return Redirect::to('recepcionista/solicitud');
    }
}