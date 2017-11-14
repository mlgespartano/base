<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    //
    //Apuntar a un tabla

    protected $table='reserva';
    //especificar ñla clave primaria
    protected $primaryKey='id_reserva';
    //Deshabilitar marcado de registross
    public $timestamps=false;
//Definir campos que tendran algun valor
    protected $fillable=[
        'id_reserva',
       
        'tipo_reser',
    	'nombre_cliente',
        'tel',
        'correo',
        'fecha',
        'hora',
        'num_pax',
        'dirrecion_banquete',
        'estado'
    
    ];
}


