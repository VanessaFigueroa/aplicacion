<form id="registroForm" method="post" class="form-horizontal mitad" action="#">
			
				<h2>Registro de Estudiante</h2>
					<div class="form-group">
						<label class="col-lg-3 control-label">Nombres</label>
						<div class="col-lg-3">
							<input type="text" class="form-control" name="nombre" />
						</div>
					</div>
 
					 <div class="form-group">
						<label class="col-lg-3 control-label">Apellidos</label>
						<div class="col-lg-3">
							<input type="text" class="form-control" name="apellido" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-3 control-label">Cedula de Identidad</label>
						<div class="col-lg-3">
							<input type="text" class="form-control" name="cedula" />
						</div>
					</div>
 
					<div class="form-group">
						<label class="col-lg-3 control-label">Sexo</label>
						<div class="col-lg-9">
							<div class="radio">
								<label>
									<input type="radio" name="sexo" value="M" /> Masculino
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="sexo" value="F" /> Femenino
								</label>
							</div>
						</div>
					</div>
 
					<div class="form-group">
						<label class="col-lg-3 control-label">Direccion</label>
						<div class="col-lg-3">
							<textarea class="form-control" name="direccion" id="direccion" cols="30" rows="5"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Teléfono</label>
						<div class="col-lg-3">
							<input type="text" class="form-control" name="telefono" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-3 control-label">Correo Electrónico</label>
						<div class="col-lg-3">
							<input type="text" class="form-control" name="email" />
						</div>
	 				 </div>

			 	 	<div class="form-group">
						<label class="col-lg-3 control-label">Nombres Representante</label>
						<div class="col-lg-3">
							<input type="text" class="form-control" name="nombre" />
						</div>
					</div>
 
					<div class="form-group">
			 		 	<label class="col-lg-3 control-label">Teléfono Representante</label>
						<div class="col-lg-3">
							<input type="text" class="form-control" name="telefono_cel" />
						</div>
			 	 	</div>	
 
			 		<div class="form-group">
						<div class="col-lg-9 col-lg-offset-3">
							<button type="submit" class="btn btn-success left">Registrarse</button>
						</div>
					</div>
</form>