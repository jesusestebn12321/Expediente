var inputs = document.querySelectorAll( '.inputfile' );
Array.prototype.forEach.call( inputs, function( input )
{
	var label	 = input.nextElementSibling,
		labelVal = label.innerHTML;

	input.addEventListener( 'change', function( e )
	{
		var fileName = '';
		if( this.files && this.files.length > 1 )
			fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
		else
			fileName = e.target.value.split( '\\' ).pop();

		if( fileName )
			label.querySelector( 'span' ).innerHTML = fileName;
		else
			label.innerHTML = labelVal;
	});
}); 
var inputs = document.querySelectorAll( '.partida' );
Array.prototype.forEach.call( inputs, function( input )
{
	var label	 = input.nextElementSibling,
		labelVal = label.innerHTML;

	input.addEventListener( 'change', function( e )
	{
		var fileName = '';
		if( this.files && this.files.length > 1 )
			fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
		else
			fileName = e.target.value.split( '\\' ).pop();

		if( fileName )
			label.querySelector( 'span' ).innerHTML = fileName;
		else
			label.innerHTML = labelVal;
	});
}); 
var inputs = document.querySelectorAll( '.imgDniDemandado' );
Array.prototype.forEach.call( inputs, function( input )
{
	var label	 = input.nextElementSibling,
		labelVal = label.innerHTML;

	input.addEventListener( 'change', function( e )
	{
		var fileName = '';
		if( this.files && this.files.length > 1 )
			fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
		else
			fileName = e.target.value.split( '\\' ).pop();

		if( fileName )
			label.querySelector( 'span' ).innerHTML = fileName;
		else
			label.innerHTML = labelVal;
	});
}); 
var inputs = document.querySelectorAll( '.imgDniDemandante' );
Array.prototype.forEach.call( inputs, function( input )
{
	var label	 = input.nextElementSibling,
		labelVal = label.innerHTML;

	input.addEventListener( 'change', function( e )
	{
		var fileName = '';
		if( this.files && this.files.length > 1 )
			fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
		else
			fileName = e.target.value.split( '\\' ).pop();

		if( fileName )
			label.querySelector( 'span' ).innerHTML = fileName;
		else
			label.innerHTML = labelVal;
	});
}); 
var inputs = document.querySelectorAll( '.imgDocument' );
Array.prototype.forEach.call( inputs, function( input )
{
	var label	 = input.nextElementSibling,
		labelVal = label.innerHTML;

	input.addEventListener( 'change', function( e )
	{
		var fileName = '';
		if( this.files && this.files.length > 1 )
			fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
		else
			fileName = e.target.value.split( '\\' ).pop();

		if( fileName )
			label.querySelector( 'span' ).innerHTML = fileName;
		else
			label.innerHTML = labelVal;
	});
}); 
// type inicio
function editType(id_row){
	$('#inputType'+id_row).toggleClass('hidden');
	$('#bntType'+id_row).toggleClass('hidden');
	$('#editType'+id_row).toggleClass('hidden');
	$('#type'+id_row).toggleClass('hidden');
}
function upDateType(id_row){
	$('#inputType'+id_row).toggleClass('hidden');
	$('#bntType'+id_row).toggleClass('hidden');
	$('#editType'+id_row).toggleClass('hidden');
	$('#type'+id_row).toggleClass('hidden');
	$.ajax({
			url: `Reasons/Update/`+id_row,
			method: 'GET',
			dataType: 'text',
			data: {
			type: $('#inputType'+id_row).val()
		},success: function (respuesta) {
			swal(respuesta, {
				icon: "success",
			});
			$('#type'+id_row).val($('#inputType'+id_row).val());
		}
	});			
}
$('#storeType').click(function(){
	var type=$('#typeStore');
	
	$.ajax({
		url: `Types/Store`,
		type: "GET",
		dataType: "text",
		data: {
			type:type.val()
		},
		success: function (response) {
			swal(response, {
				icon: "success",
			});
			$(form)[0].reset();
			$('#newType').val(type.val());
		}
	});
});
function DestroyType(id_row){
	var id=$('#id'+id_row);
    swal({
		title: "¿Desea eliminar este motivo "+id.val() +" ?",
		text: "El motivo se eliminara en caso de que precione OK!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	}).then((willDelete) => {
		if (willDelete) {
			$.ajax({
				url: `Types/Delete/`+id.val(),
				method: 'GET',
				dataType: 'text',
				data: {
					id: id.val()
				},success: function (respuesta) {
					$('#tr'+id_row).addClass('hidden');
					swal(respuesta, {
						icon: "success",
					});
				},error(e){
					swal('Error en url', {
						icon: "error",
					});
				}
			});
			
		}else{

			swal("El motivo No sera eliminado!",{
				icon:"info",
			});
		}
	});
}
// type end
// reason inicio
function editReason(id_row){
	$('#inputReason'+id_row).toggleClass('hidden');
	$('#bntReason'+id_row).toggleClass('hidden');
	$('#editReason'+id_row).toggleClass('hidden');
	$('#reason'+id_row).toggleClass('hidden');
}
$('#storeReason').click(function(){
	var reason=$('#reasonStore');
	$.ajax({
		url: `Reasons/Store`,
		type: "GET",
		dataType: "text",
		data: {
			reason:reason.val()
		},
		success: function (response) {
			swal(response, {
				icon: "success",
			});
			$(form)[0].reset();
			$('#newReason').val(reason.val());
		}
	});
});
function upDateReason(id_row){
	$('#inputReason'+id_row).toggleClass('hidden');
	$('#bntReason'+id_row).toggleClass('hidden');
	$('#editReason'+id_row).toggleClass('hidden');
	$('#reason'+id_row).toggleClass('hidden');
	$.ajax({
			url: `Reasons/Update/`+id_row,
			method: 'GET',
			dataType: 'text',
			data: {
			reason: $('#inputReason'+id_row).val()
		},success: function (respuesta) {
			swal(respuesta, {
				icon: "success",
			});
			$('#reason'+id_row).val($('#inputReason'+id_row).val());
		}
	});		
}
function DestroyReason(id_row){
	var id=$('#id'+id_row);
    swal({
		title: "¿Desea eliminar este motivo "+id.val() +" ?",
		text: "El motivo se eliminara en caso de que precione OK!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	}).then((willDelete) => {
		if (willDelete) {
			$.ajax({
				url: `Reasons/Delete/`+id.val(),
				method: 'GET',
				dataType: 'text',
				data: {
					id: id.val()
				},success: function (respuesta) {
					$('#tr'+id_row).addClass('hidden');
					swal(respuesta, {
						icon: "success",
					});
				},error(e){
					swal('Error de ruta', {
						icon: "error",
					});
				}
			});
			
		}else{

			swal("El motivo No sera eliminado!",{
				icon:"info",
			});
		}
	});
}
// reason end
// expediente destroy
function Destroy(id_row){
	var id=$('#id'+id_row);
    swal({
		title: "¿Desea eliminar este Expediente "+id.val() +" ?",
		text: "El motivo se eliminara en caso de que precione OK!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	}).then((willDelete) => {
		if (willDelete) {
			$.ajax({
				url: `http://localhost/expedienteDigitall/public/Expedientes/Destroy/`+id.val(),
				method: 'GET',
				dataType: 'text',
				data: {
					id: id.val()
				},success: function (respuesta) {
					$('#tr'+id_row).addClass('hidden');
					swal(respuesta, {
						icon: "success",
					});
				},error(e){
					swal('Error de ruta', {
						icon: "error",
					});
				}
			});
			
		}else{

			swal("El motivo No sera eliminado!",{
				icon:"info",
			});
		}
	});

}