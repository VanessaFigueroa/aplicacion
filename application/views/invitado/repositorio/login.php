<div class = "container">
	<div class="wrapper">
		<form action="<?= base_url()?>login/loginn" method="post" name="Login_Form" class="form-signin">       
		    <h3 class="form-signin-heading">Bienvenido</h3>
			  <hr class="colorgraph"><br>
			  
			  <input type="text" class="form-control" name="Username" id="Username" placeholder="Username"  autofocus="" />
			  <input type="password" class="form-control" name="Password" placeholder="Password" id="Password" />     		  
			 
			  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button> <br/>
			  <a href="<?= base_url()?>login/registro">Nueva Cuenta</a>
			<div class="errors"><?php echo validation_errors(); ?></div>    			
		</form>			
	</div>
</div>