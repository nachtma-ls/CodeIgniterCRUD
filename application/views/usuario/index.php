<!-- CRUD -->
<center><h1 class="text-primary"><b>CRUD</b></h1></center>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home">CONSULTA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu1">REGISTRO</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active container" id="home">
	<br>
	<table class="table table-hover text-center">
		<thead>
			<th>ID</th>
			<th>NOMBRE</th>
			<th>CARRERA</th>
			<th>FUNCIONES</th>
		</thead>
		<tbody>
			<?php foreach ($listAlumnos as $value){  ?>
				<tr class="table-primary">
					<!--$value->campoBase-->
					<td><?php echo $value->id; ?></td>
					<td><?php echo $value->nombre; ?></td>
					<td><?php echo $value->carrera; ?></td>
					<td>
						<center>
							<a href="<?php echo base_url('usuario/delete').'/'.$value->id; ?>" style="color: white;" title="Eliminar"><i class="fas fa-trash"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							
							<a href="<?php echo base_url('usuario/edit').'/'.$value->id; ?>" style="color: white;" title="Modificar"><i class="fas fa-user-edit"></i></a>
						</center>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>  	
  </div>
  <div class="tab-pane container" id="menu1">
  	<div class="row">
  		<div class="col-md-7">
  			<form method="POST" action="<?php echo base_url('usuario/insert')?>">
	  <div class="form-group"><br>
	    <label for="nombre">Nombre:</label>
	    <input type="text" class="form-control" placeholder="Ingrese Nombre" id="nombre" name="nombre">
	  </div><br>
	  <div class="form-group">
	    <label for="carrera">Carrera:</label>
	    <input type="text" class="form-control" placeholder="Ingrese Carrera" id="carrera" name="carrera">
	  </div><br>
	<center>
		<button type="submit" class="btn btn-primary">REGISTRAR ALUMNO</button>
	</center>
	</form>
  		</div>
  		<div class="col-md-5"></div>
  	</div>
	  	
  </div>
</div>
