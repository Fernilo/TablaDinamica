<?php include("conexion.php");
$sqlConsulta="SELECT id,nombre,apellido,email,telefono FROM t_persona WHERE 1=1";
			$rConsulta=mysqli_query($db,$sqlConsulta);



 ?>
 <br><br>
<div class="row">
	<div class="col-sm-6 offset-sm-6">
		<div class="col sm 4">
			<label for="">Buscador</label>
			<select  id="buscadorvivo" class="form-control input-sm">
				<option value="0">Selecciona uno</option>
				<?php while($var=mysqli_fetch_row($rConsulta)):  ?>
				<option value=" <?php echo $var[0] ?> "><?php echo $var[1]." ".$var[2] ?></option>
				<?php endwhile;  ?>
			</select>
		</div>
	</div>
</div>
<script>
	
	$(document).ready(function(){
		$('#buscadorvivo').select2();
		$('#buscadorvivo').change(function(){
			$.ajax({
				type:"POST",
				url:"crearsesion.php",
				data:"valor=" + $('#buscadorvivo').val(),
				success:function(r){
					$('#tabla').load("tabla.php");
				}
			})
		});
	});
</script>