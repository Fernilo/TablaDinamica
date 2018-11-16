<?php 
	session_start();
	unset($_SESSION['consulta']);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">	
	<title>Tabla dinámica</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="Alert/css/alertify.min.css">
	<link rel="stylesheet" href="Alert/css/themes/default.css">
	<link rel="stylesheet" href="select2-4.0.6-rc.1/dist/css/select2.css">
	<link rel="stylesheet" href="datatable/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="datatable/bootstrap4.css">
	<!--<script src="select2-4.0.6-rc.1/"></script>-->
	<script src="jquery.js"></script>
	<script src="funciones.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="Alert/alertify.js"></script>
	<!--<script src="select2-4.0.6-rc.1/dist/js/select2.js"></script>-->
	<script src="datatable/jquery.dataTables.min.js"></script>
	<script src="datatable/dataTables.bootstrap4.min.js"></script>
</head>
<body>
	

	<div class="container">
		<!--<div id="buscador">
			
		</div>-->
		<div id="tabla">
			
		</div>
	</div>
	

	<!-- Modal Nuevo -->
	<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Nueva persona</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="input-group input-group-sm mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
						</div>
						<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="nombre">
					</div>
					<div class="input-group input-group-sm mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroup-sizing-sm">Apellido</span>
						</div>
						<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="apellido">
					</div>
					<div class="input-group input-group-sm mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
						</div>
						<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="email">
					</div>
					<div class="input-group input-group-sm mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroup-sizing-sm">Teléfono</span>
						</div>
						<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="telefono">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarNuevo">Agregar</button>

				</div>
			</div>
		</div>
	</div>
	<!-- Modal Edicion -->
	<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Actualizar Datos</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<input type="hidden" name="" id="idPersona">
					<div class="input-group input-group-sm mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
						</div>
						<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="nombreU">
					</div>
					<div class="input-group input-group-sm mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroup-sizing-sm">Apellido</span>
						</div>
						<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="apellidoU">
					</div>
					<div class="input-group input-group-sm mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
						</div>
						<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="emailU">
					</div>
					<div class="input-group input-group-sm mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroup-sizing-sm">Teléfono</span>
						</div>
						<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="telefonoU">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" id="actualizaDatos" data-dismiss="modal">Actualizar</button>
					
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#tabla').load("tabla.php");
			$('#buscador').load("buscador.php");
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#guardarNuevo').click(function(){
				nombre=$('#nombre').val();
				apellido=$('#apellido').val();
				email=$('#email').val();
				telefono=$('#telefono').val();
				agregarDatos(nombre,apellido,email,telefono);
			});

			$('#actualizaDatos').click(function(){
				actualizaDatos();
			});
		});
	</script>
</body>
</html>