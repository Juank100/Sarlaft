<!DOCTYPE html>
<html lang="es">
<head>
	<title>Precision Tools :: Ingreso plataforma Sarlaft</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="img/logo.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
        <meta name="author" content="William Diaz - Webdesigner - www.precisiontoolssas.com">
        <meta name="description" content="Ingreso plataforma Sarlaft ">
 	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    	<script>
	$(document).on('ready',function(){

	  $('#btn-ingresar').click(function(){
		var url = "session.php";                                      

		$.ajax({                        
		   type: "POST",                 
		   url: url,                    
		   data: $("#formulario").serialize(),
		   success: function(data)            
		   {
			 $('#resp').html(data);           
		   }
		 });
	  });
	});
	</script>  
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form id="formulario" action="#" method="post" class="login100-form validate-form" autocomplete="off"><img src="img/as riesgos.png" width="80%"><p><hr></p>
					<span class="login100-form-title p-b-43">
						Iniciar sesión
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" id="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>
					<div class="6u$ 12u$(small)">
						<input type="checkbox" id="human" name="human" required="required">
						<label for="human">No soy un robot</label>
					</div>
					<br><div id="resp"></div>
					<div class="controls">
						<button type="button" id="btn-ingresar" class="login100-form-btn">Sign in</button>
                            <?php if(isset($_GET['error'])) {?>
                              <div class="alert alert-error fade in error">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>Ups! No es correcto...</strong>
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

				<div class="login100-more" style="background-image: url('img/bg-03.jpg');">
				</div>
			</div>
		</div>
	</div>
         <form action="secure/sec_reg.php" method="post" name="registration_form" class="form-horizontal">
          <div class="control-group">
            <label class="control-label" for="inputUser"></label>
            <div class="controls">
              <input type="hidden" id="username" name="username"placeholder="Username">
          </div>
          <div class="control-group">
            <label class="control-label" for="inputEmail"></label>
            <div class="controls">
              <input type="hidden" id="email" name="email"placeholder="Email">
          </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="inputPassword"></label>
        <div class="controls">
          <input type="hidden" name="password" id="password" placeholder="Password">
          <input type="hidden" name="p" id="p" value="">
      </div>
  </div>

</form>

<script src="js/jquery-1.8.2.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="secure/sha512.js"></script>
<script src="secure/forms.js"></script>

     
   <script>
        $(document).ready(function () {
      $(".error").fadeIn("slow");
      $("#success").fadeIn("slow");
    });
    </script>
</body>
</html>