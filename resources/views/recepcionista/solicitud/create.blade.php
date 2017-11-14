<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Guardar reserva</title>
    @include('layouts.bootstrap')



</head>
<body>
<div class="row">
        <div class="col-md-6">
            <h1>Nuevo Solicitud</h1>
            @if(count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>

                    @endforeach
                </ul>
            </div>
            @endif

        </div>

</div>

{!!Form::open(array('url'=>'recepcionista/solicitud','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}

    {{Form::token()}}
        <div class="form-group">
                <label for="tipo_reser">Tipo de reserva</label>
                <input type="text" name="tipo_reser" required value="{{old('tipo_reser')}}" class="form-control" placeholder="Tipo de reserva...">
            </div>
        <div class="form-group">
                <label for="nombre_cliente">Nombre del cliente</label>
                <input type="text" name="nombre_cliente" required value="{{old('nombre_cliente')}}" class="form-control" placeholder="Nombre del cliente...">
            </div>
        <div class="form-group">
                <label for="tel">Telefono del cliente</label>
                <input type="text" name="tel" required value="{{old('tel')}}" class="form-control" placeholder="Telefono del cliente...">
            </div>
            <div class="form-group">
                <label for="correo">Correo del cliente</label>
                <input type="text" name="correo" required value="{{old('correo')}}" class="form-control" placeholder="Correo del cliente...">
            </div>
            <div class="form-group">
                <label for="fecha">Fecha de la reserva</label>
                <input type="text" name="fecha" required value="{{old('fecha')}}" class="form-control" placeholder="Fecha de la reserva...">
            </div>
            <div class="form-group">
                <label for="hora">Hora de la reserva</label>
                <input type="text" name="hora" required value="{{old('hora')}}" class="form-control" placeholder="Hora de la reserva...">
            </div>
                <div class="form-group">
                <label for="num_pax">Numero de personas</label>
                <input type="text" name="num_pax" required value="{{old('num_pax')}}" class="form-control" placeholder="Numero de personas...">
            </div>
             <div class="form-group">
                 <label for="direccion_banquete">Dirrecion de entrega</label>
                <input type="text" name="direccion_banquete" required value="{{old('direccion_banquete')}}" class="form-control" placeholder="Direccion de entrega...">
            </div>
           
        <div class="form-group">
            
            <button class="btn btn-success" type="submit">Guardar</button>
            <button class="btn btn-warning" type="reset">Cancelar</button>
     </div> 

{!!Form::close()!!}
</body>
</html>
