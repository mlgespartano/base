{!!Form::open(array('url' => 'almacen/categoria','method' => 'get','role' => 'search'))!!}
	<div class="form-group">
		
		<div class="input-gruop">
		<input type="text" class="form-control" name="searchText"
		placeholder="Nombre ...">	
		<span class="input-group-btn">
			<button type="submit" class="btn btn-info">Buscar</button>
	
		</span>	
		</div>
	
	</div>
{!!Form::close()!!}