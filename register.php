<!DOCTYPE html>
<html lang="es">
<head>
	<title>Asamblea virtual :: administración propiedad horizontal</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="secure/process_login.php" method="post" name="login_form" class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						Iniciar sesión
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" id="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Acepto políticas de privacidad y protección de datos personales
							</label>
						</div>
					</div>
					                  <div class="controls">
                        <button type="submit" class="login100-form-btn" onclick="formhash(this.form, this.form.password);">Sign in</button>
                            <!-- if login failed show this -->
                            <?php if(isset($_GET['error'])) {?>
                              <div class="alert alert-error fade in error">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>Ups! That wasn't correct...</strong>
                            </div>
                          <?php }?>   
                    </div>
					<p>
						<div>
							<a href="#" class="txt1">
								¿Olvidó su contraseña?
							</a>
						</div>
					</p>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							Visite nuestras redes sociales
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
 <!--THE REGISTRATION FORM-->

    <p>Registration Form</p>
    <div class="row-fluid">
        <div class="span4 offset3">

         <form action="secure/sec_reg.php" method="post" name="registration_form" class="form-horizontal">
          <div class="control-group">
            <label class="control-label" for="inputUser">Username</label>
            <div class="controls">
              <input type="text" id="username" name="username"placeholder="Username">
          </div>
          <div class="control-group">
            <label class="control-label" for="inputEmail">Email</label>
            <div class="controls">
              <input type="text" id="email" name="email"placeholder="Email">
          </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="inputPassword">Password</label>
        <div class="controls">
          <input type="password" name="password" id="password" placeholder="Password">
          <input type="hidden" name="p" id="p" value="">
      </div>
  </div>
  <div class="control-group">
    <div class="controls">
        <button type="submit" class="btn" onclick="formhash(this.form, this.form.password, this.form.p);">Register</button>
                          
                    <!-- If registration successfull show everything ok info -->
                      <?php if(isset($_GET['success'])) {?>
                        <div class="alert alert-success fade in" id="success">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>Registration done! <br>Please log in...</strong>
                            </div>
                        <?php }?>

                    <!-- if registration error show this -->
                        <?php if(isset($_GET['registrationfailed'])) {?>
                        <div class="alert alert-error fade in error" >
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>Ups! Something went wrong...</strong>
                        </div>
                        <?php }?>   
       
    </div>
</div>
</form>
</div><!--/span4-->
</div>	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


<!--Scripts-->
<script src="js/jquery-1.8.2.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="secure/sha512.js"></script>
<script src="secure/forms.js"></script>

     
   <script>
   //FADE IN MESSAGES
             
        $(document).ready(function () {
      $(".error").fadeIn("slow");
      $("#success").fadeIn("slow");
    });
    </script>

</body>
</html>