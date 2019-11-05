<div class="default col-md-9">
	<div class="panel panel-primary">
		<div class="panel panel-heading"> <center> <b>Agregar Usuario</b></center></div>
		  <div class="panel panel-body" width="95%">
			<form name="verify" method="post">
			{$alerta}
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">Nombre Completo</span>
						<input type="text" name="nombre_completo" id="nombre_completo" class="form-control" placeholder="Ingrese el nombre completo" required>
					</div>
				 </div>
				 
				 		<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">Usuario/Id</span>
						<input type="text" name="usuario" id="usuario" class="form-control" placeholder="118402" required>
					</div>
				 </div>
				
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">password</span>
						<input type="password" name="password" id="password" class="form-control" placeholder="****************" required>
					</div>
				 </div>
		
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon">Confirmar password</span>
						<input type="password" name="re_password" id="re_password" class="form-control" placeholder="****************" required>
					</div>
				 </div>
				 
					<center>
						<input type="submit" name="btn_guardar" value="Guardar Usuario" class="btn btn-primary">
						<a href="index.php" class="btn btn_danger">Cancelar Registro</a>
					</center>
			</form>
		</div>
	</div>
</div>