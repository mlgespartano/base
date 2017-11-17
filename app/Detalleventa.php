<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalleventa extends Model
{
    //apuntar a una tabla primero 
    protected $table ='detalle_venta';
    //especificar la clave primeria
    protected $primaryKey='iddetalle_venta';
    //deshabilitar marcado de registro
    public $timestamps=false;

    //definir los campos que contendran algun valor
    protected $fillable=[
    	'cantidad',
    	'precio_venta',
    	'descuento'
    ];
}
