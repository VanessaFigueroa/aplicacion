<div class = "container">
    <div class="wrapper">        
        <form class="form-horizontal form-regis" action="<?= base_url()?>login/guardar" method="POST">
            <div class="form-group">
                <label class="control-label col-xs-3">Email:</label>
                <div class="col-xs-9">
                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Password:</label>
                <div class="col-xs-9">
                    <input type="password" name="pass" class="form-control" id="inputPassword" placeholder="Password" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Confirmar Password:</label>
                <div class="col-xs-9">
                    <input type="password" name="cpass" class="form-control" placeholder="Confirmar Password" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Nombre:</label>
                <div class="col-xs-9">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Apellido:</label>
                <div class="col-xs-9">
                    <input type="text" name="apellido" class="form-control" placeholder="Apellido" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3" >Telefono:</label>
                <div class="col-xs-9">
                    <input type="tel" name="telefono" class="form-control" placeholder="Telefono">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">F. Nacimiento:</label>
                <div class="col-xs-9">
                    <input type="date" name="fecha" name="fecha" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Dirección:</label>
                <div class="col-xs-9">
                    <textarea rows="3" name="direccion" class="form-control" placeholder="Dirección"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-offset-3 col-xs-9">
                    <label class="checkbox-inline">
                        <input type="checkbox" value="agree">  Accepto <a href="#">Terminos y condiciones</a>.
                    </label>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-xs-offset-3 col-xs-9">
                    <input type="submit" class="btn btn-primary" value="Enviar" id="lanzar_alerta">
                    <input type="reset" class="btn btn-default" value="Limpiar">
                </div>
            </div>
        </form>
    </div>
</div>