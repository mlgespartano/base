<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Reservas</title>
	@include('layouts.bootstrap')

</head>
<body>

<div class="row">
	<div class="col-md-12">
		<h1>Listado de Reservas <a href="solicitud/create"><button class="btn btn-success">Agregar</button></a></h1>
		@include('recepcionista.solicitud.search')
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>					
					<th>Id Reserva</th>
					<th>Tipo de reserva</th>
					<th>Nombre del cliente</th>
					<th>Telefono</th>
					<th>Correo</th>
					<th>Fecha</th>
					<th>Hora</th>
					<th>Numero de personas</th>
					<th>Dirrecion del banquete</th>
					<th>Estado</th>
				</thead>
               @foreach ($reserva as $res)
				<tr>
					
					<td>{{ $res->id_reserva}}</td>
					<td>{{ $res->tipo_reser}}</td>
					<td>{{ $res->nombre_cliente}}</td>
					<td>{{ $res->tel}}</td>
					<td>{{ $res->correo}}</td>
					<td>{{ $res->fecha}}</td>
					<td>{{ $res->hora}}</td>
					<td>{{ $res->num_pax}}</td>
					<td>{{ $res->direccion_banquete}}</td>
					<td>{{ $res->estado}}</td>
					<td>
						<a href="{{URL::action('ReservaController@edit',$res->id_reserva)}}"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$res->id_reserva}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('recepcionista.solicitud.modal')
				@endforeach
			</table>
		</div>
		{{$reserva->render()}}
	</div>
</div>


</body>
</html>