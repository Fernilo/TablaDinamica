function agregarDatos(nombre,apellido,email,telefono){
	cadena="nombre=" + nombre + "&apellido=" + apellido + "&email=" + email + "&telefono=" + telefono;

	$.ajax({
		type:"POST",
		url:"agregar.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load("tabla.php");
				$('#buscador').load("buscador.php");

				alertify.success("Agregado con éxito");
			}
			else{
				alertify.error("Falló el registro");
			}
		}
	});
}
function agregarForm(datos){
	d=datos.split('||');
	$('#idPersona').val(d[0]);
	$('#nombreU').val(d[1]);
	$('#apellidoU').val(d[2]);
	$('#emailU').val(d[3]);
	$('#telefonoU').val(d[4]);
	
	
	
	
	
}
function actualizaDatos(datos){
	id=$('#idPersona').val();
	nombre=$('#nombreU').val();
	apellido=$('#apellidoU').val();
	email=$('#emailU').val();
	telefono=$('#telefonoU').val();
	cadena="id="+ id +"&nombre=" + nombre + "&apellido=" + apellido + "&email=" + email + "&telefono=" + telefono;

	$.ajax({
		type:"POST",
		url:"actualizar.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load("tabla.php");
				$('#buscador').load("buscador.php");
				alertify.success("Actualizado con éxito");
			}
			else{
				alertify.error("Falló tualización");
			}
		}
	})
}
function preguntar(id){
	alertify.confirm('Eliminar', 'Seguro desea eliminar?', function(){ eliminar(id) }
		, function(){ alertify.error('Cancelado')});


}
function eliminar(id){
	cadena="id="+id;



	$.ajax({
		type:"POST",
		url:"eliminar.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load("tabla.php");
				alertify.success("Eliminado correctamente");
			}else{
				alertify.error("Error al eliminar");
			}
		}
	});
}