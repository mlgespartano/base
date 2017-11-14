@extends('layouts.admin')
@section('contenido')

<div class="row">
		<div class="col-md-6">
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

{!!Form::model($categoria,['method'=>'PUT','route'=>['almacen.categoria.update',$categoria->idcategoria]])!!}

	{{Form::token()}}
		<div class="form-gruop">
			<label>Nombre</label>
			<input type="text" name="nombre" class="form-control" value="{{$categoria->nombre}}">
		</div>
		<div class="form-gruop">
			<label>Descripcion</label>
			<input type="text" name="descripcion" class="form-control" value="{{$categoria->descripcion}}">
		</div>
		<form class="gruop">
			<button class="btn btn-success" type="submit">Guardar</button>
			<button class="btn btn-warning" type="reset">Cancelar</button>
		</form>

{!!Form::close()!!}

@endsection 	