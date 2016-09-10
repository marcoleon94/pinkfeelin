<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel=stylesheet href="css/materialize.min.css">
	<link rel=stylesheet href="css/materialize.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<style>

  /* label color */
   .input-field label {
     color: #9e9e9e;
     font-style: italic;

   }
   /* label focus color */
   .input-field input[type=text]:focus + label {
     color: #f48fb1;
     font-style: normal;
   }

   .input-field input[type=password]:focus + label {
     color: #f48fb1;
     font-style: normal;
   }
   /* label underline focus color */
   .input-field input[type=text]:focus {
     border-bottom: 1px solid #f48fb1;
     box-shadow: 0 1px 0 0 #f48fb0;
   }

   .input-field input[type=password]:focus {
     border-bottom: 1px solid #f48fb1;
     box-shadow: 0 1px 0 0 #f48fb0;
   }
   /* valid color */
   .input-field input[type=text].valid {
     border-bottom: 1px solid #f48fb1;
     box-shadow: 0 1px 0 0 #f48fb1;
   }

   .input-field input[type=password].valid {
     border-bottom: 1px solid #f48fb1;
     box-shadow: 0 1px 0 0 #f48fb1;
   }
   /* invalid color */
   .input-field input[type=text].invalid {
     border-bottom: 1px solid #f48fb1;
     box-shadow: 0 1px 0 0 #f48fb1;
   }

   .input-field input[type=password].invalid {
     border-bottom: 1px solid #f48fb1;
     box-shadow: 0 1px 0 0 #f48fb1;
   }
   /* icon prefix focus color */
   .input-field .prefix.active {
     color: #f48fb1;
   }


   
        

</style>
<body>
<?php require('menu.php');?>

<div class="page-login">
	<div class="center">
		<div class="card bordered" style="margin:5% auto; max-width:400px; border-radius: 13px;">
			<div class="card-header" style="background-color: #f48fb1; color: white; border-top-left-radius: 13px; border-top-right-radius: 13px;">
           		<i class="material-icons large white-text">perm_identity</i>
            	<p>Inicia sesión con tu cuenta</p> 
        	</div>
        	
        	<div class="card-content">
        		<form>
        		
	        			<div class="row">
	        				<div class="input-field col s12">
	        					<i class="material-icons prefix">account_circle</i>
	        					<input type="text" id="usuario" class="validate" >
	        					<label for="usuario" class="left-align"> Usuario</label>
	        				</div>

	        				<div class="input-field col s12">
	        					<i class="material-icons prefix">lock</i>
	        					<input type="password" id="contra" class="validate">
	        					<label for="contra" class="left-align" ">Contraseña</label>
	        				</div>
	        				
	        				<button class="btn waves-effect waves-red right" type="submit" name="action" style="margin-top:30px; background-color:#f48fb1;">Iniciar Sesion
    							<i class="material-icons right">input</i>
  							</button>

	        			</div>
        		</form>
        	</div>
		</div>
	</div>
</div>





	<script src="js/jquery.min.js"></script>
	<script src="js/materialize.min.js"></script>

</body>
</html>