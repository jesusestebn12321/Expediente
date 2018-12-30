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

function Destroy(id_row){
	var id=$('#id'+id_row);
	var code=$('#code'+id_row);
    swal({
		title: "¿Desea eliminar este expediente "+ code.val() +"?",
		text: "El expediente se eliminara en caso de que precione OK!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	}).then((willDelete) => {
		if (willDelete) {
			$.ajax({
				url: 'http://localhost/expediente/public/Expedientes/Destroy/'+id.val(),
				method: 'GET',
				dataType: 'text',
				data: {
					id: id.val()
				},success: function (respuesta) {
					$('#tr'+id_row).addClass('hidden');
					swal(respuesta, {
						icon: "success",
					});
				}
			});
			
		}else{

			swal("El Expediente No sera eliminado!",{
				icon:"info",
			});
		}
	});
}