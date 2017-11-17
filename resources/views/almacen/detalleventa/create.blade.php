@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Detalle venta</h3>
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
			{!!Form::open(array('url'=>'almacen/detalleventa','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}
    
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="cantidad">Cantidad</label>
            	<input type="text" name="cantidad" required value="{{old('cantidad')}}" class="form-control" placeholder="Cantidad...">
            </div>
    	</div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<label for="precio_venta">Precio de venta</label>
            	<input type="text" name="precio_venta" value="{{old('precio_venta')}}" class="form-control" placeholder="Precio de venta...">
            </div>
    	</div>
    	
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="descuento">Descuento</label>
                <input type="text" name="descuento" value="{{old('descuento')}}" class="form-control" placeholder="Descuento...">
            </div>
        </div>
    	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    		<div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
    	</div>
    </div>
            
            
            

			{!!Form::close()!!}		

@endsection