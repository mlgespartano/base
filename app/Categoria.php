<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //apuntar a una tabla primero 
    protected $table ='categoria';
    //especificar la clave primeria
    protected $primaryKey='idcategoria';
    //deshabilitar marcado de registro
    public $timestamps=false;

    //definir los campos que contendran algun valor
    protected $fillable=[
    	'nombre',
    	'descripcion',
    	'condicion'
    ];
}
