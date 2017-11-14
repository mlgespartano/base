	<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$res ->id_reserva}}">
	{{Form::open(array('action'=>array('ReservaController@destroy',$res->id_reserva),'method'=> 'delete'))}}	

<div class="modal-dialog">
		<div class="modal-content">
			<div class="header">
				<button type="button" class="close" data-dismiss="modal" arial-label="Close"><span arian-hidden="true">X</span></button>
				<h4 class="modal-title">Eliminar reserva: {{$res->nombre_cliente}}</h4>
			</div>

				<div class="modal-body">
					<p>¿Esta Seguro de eliminar la solicitud?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-danger">Confirmar</button>
				</div>
	</div>

</div>

{{Form::close()}}
</div>