<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Editar reserva</title>
    @include('layouts.bootstrap')



</head>
<body>
    <div class="row">
        <div class="col-md-6">
           <h1>Editar Solicitud : {{$reserva ->nombre_cliente}}</h1>
            @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>


<div class="row">
    <div class="col-md-6">
    {!!Form::model($reserva,['method'=>'PUT','route'=>['recepcionista.solicitud.update',$reserva->id_reserva]])!!}

        {{Form::token()}}



<div class="row">
     
    <div class="col-md-6">
            <div class="form-group">
                  <label for="tipo_reser">Tipo de reserva</label>
                <input type="text" name="tipo_reser" required value="{{$reserva ->tipo_reser}}" class="form-control">
            </div>
        </div>
        
    <div class="col-md-6">
            <div class="form-group">
                 <label for="nombre_cliente">Nombre del cliente</label>
                <input type="text" name="nombre_cliente" required value="{{$reserva ->nombre_cliente}}" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="tel">Telefono del cliente</label>
                <input type="text" name="tel" required value="{{$reserva ->tel}}" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
               <label for="correo">Correo del cliente</label>
                <input type="text" name="correo" value="{{$reserva ->correo}}" class="form-control" >
            </div>
        </div>
         <div class="col-md-6">
            <div class="form-group">
                <label for="fecha">Fecha de la reserva</label>
                <input type="text" name="fecha" required value="{{$reserva ->fecha}}" class="form-control">
            </div>
        </div>
         <div class="col-md-6">
            <div class="form-group">
                <label for="hora">Hora de la reserva</label>
                <input type="text" name="hora" required value="{{$reserva ->hora}}" class="form-control">
            </div>
        </div>
         <div class="col-md-6">
            <div class="form-group">
                <label for="num_pax">Numero de personas</label>
                <input type="text" name="num_pax" required value="{{$reserva ->num_pax}}" class="form-control">
            </div>
        </div>
         <div class="col-md-6">
            <div class="form-group">
                <label for="direccion_banquete">Direccion de entrega</label>
                <input type="text" name="direccion_banquete" class="form-control">
            </div>
        </div>
       

    
    <div class="form-group">
        <button class="btn btn-success" type="submit">Guardar</button>
        <button class="btn btn-warning" type="reset">Cancelar</button>
    </div>
</div>
</div>
</div>
{!!Form::close()!!}

</body>
</html>