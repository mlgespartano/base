<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Reporte</title>
</head>
<body>

	<h1 align="center" >Reporte de Reserva </h1>

	<table align="center">
		<thead>
					<tr>	
					
					<th><strong>Tipo de reserva</strong></th>
					<th><strong>Nombre del cliente</strong></th>
					<th><strong>Telefono</strong></th>
					<th><strong>Correo</strong></th>
					<th><strong>Fecha</strong></th>
					<th><strong>Hora</strong></th>
					
					</tr>
			
				<tbody>
					@foreach($reserva as $res)
					<tr>
				
					<td>{{ $res->tipo_reser}}</td>
					<td>{{ $res->nombre_cliente}}</td>
					<td>{{ $res->tel}}</td>
					<td>{{ $res->correo}}</td>
					<td>{{ $res->fecha}}</td>
					<td>{{ $res->hora}}</td>
					
				
					
					</tr>
						
				
					
				
					@endforeach
				</tbody>

		</thead>
	</table>


</body>
</html>