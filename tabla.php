<?php 
session_start();
include("conexion.php");
?>
<div class="row">
	<div class="col-sm-12">
		<div class="row">
			<h2 class="col-sm-4">Tabla Dinámica</h2>
			<br>
			<button class="btn btn-primary col-sm-3 mb-2 mt-2 offset-sm-5" data-toggle="modal" data-target="#modalNuevo">Agregar nuevo 
				<img src="plus_40632.ico" alt="">
			</button>
		</div>
		<table class="table table-hover table-sm table-bordered" id="tablaDinamicaLoad">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Email</th>
					<th>Teléfono</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php 


			/*if(isset($_SESSION['consulta'])){
				if($_SESSION['consulta']>0){
					$idP=$_SESSION['consulta'];
					$sqlConsulta="SELECT id,nombre,apellido,email,telefono FROM t_persona WHERE id=$idP";
				}
				else{
					$sqlConsulta="SELECT id,nombre,apellido,email,telefono FROM t_persona WHERE 1=1";
				}
			}else{*/
				$sqlConsulta="SELECT id,nombre,apellido,email,telefono FROM t_persona WHERE 1=1";
				/*}*/

				$rConsulta=mysqli_query($db,$sqlConsulta);

				if($rConsulta){


					while($var = mysqli_fetch_array($rConsulta) )
					{
						$datos=$var['id']."||".$var['nombre']."||".$var['apellido']."||".$var['email']."||".$var['telefono'];

						?>
						
						<tr>
							<td><?php echo $var['nombre']; ?></td>
							<td><?php echo $var['apellido']; ?></td>
							<td><?php echo $var['email']; ?></td>
							<td><?php echo $var['telefono']; ?></td>
							<td><button class="btn btn-warning" data-toggle="modal" data-target="#modalEdicion" onclick="agregarForm('<?php echo $datos  ?> ')"><img src="edit_icon-icons.com_52382.ico" alt=""></button></td>
							<td><button class="btn btn-danger" onclick="preguntar( <?php echo $var['id']; ?> )" ><img src="emptytrash_vacio_3529.ico" alt=""></button></td>
						</tr>
						<?php 
					}
				}
				?>
			</tbody>

		</table>

	</div>	
</div>

<script>
	$(document).ready(function() {
		$('#tablaDinamicaLoad').dataTable( {
			"language": idioma_espanol
		} );
	} );
	var	idioma_espanol={
		"sProcessing":     "Procesando...",
		"sLengthMenu":     "Mostrar _MENU_ registros",
		"sZeroRecords":    "No se encontraron resultados",
		"sEmptyTable":     "Ningún dato disponible en esta tabla",
		"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
		"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
		"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		"sInfoPostFix":    "",
		"sSearch":         "Buscar:",
		"sUrl":            "",
		"sInfoThousands":  ",",
		"sLoadingRecords": "Cargando...",
		"oPaginate": {
			"sFirst":    "Primero",
			"sLast":     "Último",
			"sNext":     "Siguiente",
			"sPrevious": "Anterior"
		},
		"oAria": {
			"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			"sSortDescending": ": Activar para ordenar la columna de manera descendente"
		}
	}
</script>