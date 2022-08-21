<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>CRUD UMG</title>
</head>
<body>
	<div class="container">

		<div class="row">
			<h2>CRUD UMG</h2>
		</div>


		<!-- Formulario -->
		
		<div class="mb-5">
		<?php echo form_open('welcome/agregar', [ 'id' =>'form-persona']); ?>
			<form action="">
				<div class="row">
				<div class="form-group col-sm-4">
								<label for="">Nombre</label>
								<input type="text" name="nombre" class="form-control" required placeholder="Nombre" id="nombre">
							</div>
							<div class="form-group col-sm-4">
							<label for="">Apellido</label>
							<input type="text" name="apellido" class="form-control" required placeholder="Apellido" id="apellido">
						</div>
						<div class="form-group col-sm-4">
							<label for="">Dirección</label>
							<input type="text" name="direccion" class="form-control" required placeholder="Direccion" id="direccion">
						</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-4">
							<label for="">Movil</label>
							<input type="text" name="movil" class="form-control" required placeholder="+502 1111-1111" id="movil">
						</div>
						<div class="form-group col-sm-4">
							<label for="">Email</label>
							<input type="text" name="email" class="form-control" required placeholder="ejemplo@gmail.com" id="email">
						</div>
					</div>
					<button type="submit" class="btn btn-primary btn-block">Guardar</button>
				</div>
				<?php echo form_close(); ?>
				
				</form>
				
			</div>
		<!-- Tabla de Datos -->

			<div class="row">
				<div class="card col-12">
					<div class="card-header">
						<h4>Usuarios</h4>
					</div>
					<div class="card-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Nombre</th>
									<th scope="col">Dirección</th>
									<th scope="col">Movil</th>
									<th scope="col">Editar</th>
									<th scope="col">Eliminar</th>
									
								</tr>
							</thead>
								<tbody>
									<?php
										$count =  0;
										foreach ($personas as $persona){
											echo '
											<tr> 
												<td>'.++$count.' </td>
												<td>'.$persona->nombre.' '.$persona->apellido.' </td>
												<td>'.$persona->direccion.' </td>
												<td>'.$persona->movil.' </td>
												<td><button type="button" class="btn btn-warning text-white" onclick="llenar_datos
												('.$persona->alumno.', `'.$persona->nombre.'`, `'.$persona->apellido.'`, `'.$persona->direccion.'`, `'.$persona->movil.'`, `'.$persona->email.'`)">Editar</button></td>		
												<td><a href="'.base_url('welcome/eliminar/'.$persona->alumno).'" type="button" class="btn btn-danger">Eliminar</a></td>		
											</tr>
											';	
										}
									?>
							</tbody>
						</table>
					</div>
				</div>

		
			


	</div>

	<script>

			let url = "<?php echo base_url('welcome/editar'); ?>";
			const llenar_datos = (alumno, nombre, apellido, direccion, movil, email) => {
				let path = url+"/"+alumno;
				document.getElementById('form-persona').setAttribute('action', path);
				
				document.getElementById('nombre').value = nombre;
				document.getElementById('apellido').value = apellido;
				document.getElementById('direccion').value = direccion;
				document.getElementById('movil').value = movil;
				document.getElementById('email').value = email;
			};
		
		</script>
</body>
</html>