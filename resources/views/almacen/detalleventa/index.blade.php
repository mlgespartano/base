@extends ('layouts.admin')
@section ('contenido')
<div class="container">
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Detalle de venta <a href="detalleventa/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('almacen.detalleventa.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Cantidad</th>
					<th>Precio de venta</th>
					<th>Descuento</th>
				</thead>

               @foreach ($detalle_venta as $det)
				<tr>
					
					<td>{{ $det->cantidad}}</td>
					<td>{{ $det->precio_venta}}</td>
					<td>{{ $det->descuento}}</td>
					<td>
						<a href="{{URL::action('DetalleventaController@edit',$det->iddetalle_venta)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$det->iddetalle_venta}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
		@include('almacen.detalleventa.modal')
				@endforeach
			</table>
		</div>
		</div>
		{{$detalle_venta->render()}}
	
</div>
</div>
@endsection