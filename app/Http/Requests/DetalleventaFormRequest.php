<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DetalleventaFormRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'iddetalle_venta'=>'required',
            'cantidad'=>'required|numeric',
            'precio_venta'=>'required|numeric',
            'descuento'=>'numeric'
          
        ];
    }
}
