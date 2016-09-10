<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<link rel=stylesheet href="css/materialize.min.css">
	<link rel=stylesheet href="css/materialize.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<style>
	.input-field label {
     color: gray;
   }
   /* label focus color */
   .input-field input[type=text]:focus + label {
     color: #f48fb1;
   }

</style>
<body>

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
	        					<input type="text" id="usuario" class="validate" >
	        					<label for="usuario" class="left-align"> Usuario</label>
	        				</div>

	        				<div class="input-field col s12">
	        					<input type="password" id="contra" class="validate">
	        					<label for="contra" class="left-align" style="color:#f48fb1; ">Contraseña</label>
	        				</div>
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