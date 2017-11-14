<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Reporte</title>
</head>
<body>

	<h1 align="center" >Reporte de categoria </h1>

	<table align="center">
		<thead>
			<tr>
			 	<th> <strong>  Id </strong></th>
				<th><strong> Nombre </strong></th>
				<th> <strong>Descripcion </strong></th>

			</tr>

				<tbody>
					@foreach($categorias as $cat)
					<tr>
						<td>{{$cat->idcategoria}}</td>
						<td>{{$cat->nombre}}</td>
						<td>{{$cat->descripcion}}</td>
					</tr>
					@endforeach
				</tbody>

		</thead>
	</table>


</body>
</html>