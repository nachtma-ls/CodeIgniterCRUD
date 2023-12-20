<form method="POST" action="<?php echo base_url('usuario/update')?>">
	<?php foreach($datosAlumno as $value){ ?>
	  <div class="form-group"><br>
	    <input type="hidden" class="form-control" name="id" value="<?php echo $value->id; ?>">
	  </div><br>
	  <div class="form-group"><br>
	    <label for="nombre">Nombre:</label>
	    <input type="text" class="form-control" name="nombre" value="<?php echo $value->nombre; ?>">
	  </div><br>
	  <div class="form-group">
	    <label for="carrera">Carrera:</label>
	    <input type="text" class="form-control" name="carrera" value="<?php echo $value->carrera; ?>">
	  </div><br>
	<center>
	<?php } ?>
		<button type="submit" class="btn btn-primary">ACTUALIZAR ALUMNO</button>
	</center>
</form>