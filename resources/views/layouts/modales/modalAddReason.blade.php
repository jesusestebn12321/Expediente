<div class="modal fade" id="modalAddReasons">
	<div class="modal-dialog">
		<div class="modal-content"> 
			<div class="app-modal-header modal-header bg-red-gradient text-white">
				<a class="close" aria-hidden="true" data-dismiss="modal">&times;</a>
				<h3 class='center'>Motivo de demandas <span class="fa fa-file"></span></h3>
			</div>
			<div class="modal-body">
                <form id='form' action="#" method='POST'>
                    <div class="form-group">
                        <label for="nombre">Motivo</label>
                        <input type="text" id='reasonStore' class="form-control" placeholder="Motivo de la demanda" required>
                    </div>
                <div class="app-modal-footer modal-footer">
                    <a type="submit" data-dismiss="modal" id='storeReason' class="btn btn-success">Guardar</a>
                </form>
                <a class="btn btn-danger" data-dismiss="modal">Salir<span class="fa  fa-chevron-circle-right"></span></a>
            </div>
        </div>
		</div>
	</div>
</div>