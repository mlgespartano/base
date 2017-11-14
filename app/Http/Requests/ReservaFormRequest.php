<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ReservaFormRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'tipo_reser'=>'required|max:25',
            'nombre_cliente'=>'required|max:50',
            'tel'=>'required|numeric',
            'correo'=>'required|max:80',
            'fecha'=>'max:30',
            'hora'=>'max:20',
            'num_pax'=>'numeric',
            'direccion_banquete'=>'max:50',

            
        ];
    }
}