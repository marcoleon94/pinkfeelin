<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<link rel=stylesheet href="css/materialize.min.css">
	<link rel=stylesheet href="css/materialize.css">
  <link rel=stylesheet href="css/main.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    
</head>
<body>
<?php require('menu.php');?>

<div class="page-login">
	<div class="center">
		<div class="card bordered" style="margin:5% auto; max-width:800px; border-radius: 13px;">
			<div class="card-header" style="background-color: #f48fb1; color: white; border-top-left-radius: 13px; border-top-right-radius: 13px;">
        <div class="row">	
          <div class="col s1" style="margin-top: 13px;">
              <i class="material-icons medium white-text">mode_edit</i>
          </div>
          <div class="col s11 left-align">
            <h3>Registrate</h1>
          </div>
        </div>
      </div>
        	
      <div class="card-content">
        <form>
        	<div class="row">

          <div class="input-field col s4">
              <i class="material-icons prefix">account_circle</i>
                <input type="text" id="nombre" class="validate" >
                <label for="nombre" class="left-align">Nombre</label>
            </div>

            <div class="input-field col s8">
              <i class="material-icons prefix">account_circle</i>
                <input type="text" id="apellido" class="validate" >
                <label for="apellido" class="left-align">Apellidos</label>
            </div>

            <div class="input-field col s12">
              <i class="material-icons prefix">location_on</i>
                <input type="text" id="direccion" class="validate" >
                <label for="direccion" class="left-align">Direccion</label>
            </div>

            <div class="input-field col s12">
              <i class="material-icons prefix">email</i>
                <input type="text" id="email" class="validate" >
                <label for="email" class="left-align">E-mail</label>
            </div>
	        	<div class="input-field col s12">
	        		<i class="material-icons prefix">account_circle</i>
	        			<input type="text" id="usuario" class="validate" >
	        			<label for="usuario" class="left-align">Usuario</label>
	        	</div>

	        	<div class="input-field col s6">
	        		<i class="material-icons prefix">lock</i>
	        		<input type="password" id="contra" class="validate">
	        		<label for="contra" class="left-align" ">Contraseña</label>
	        	</div>
            <div class="input-field col s6">
              <i class="material-icons prefix">lock_outline</i>
              <input type="password" id="contrar" class="validate">
              <label for="contrar" class="left-align" ">Repetir Contraseña</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix">today</i>              
              <input type="date" class="datepicker" id="fecha"> 
              <label for="fecha" class="left-align">Dia de Nacimiento</label>
            </div>


            <div class="input-field col s6">
            <label>Sexo</label><br>
                <p>
                  <input class="with-gap" name="sexo" type="radio" id="hombre" />
                  <label for="hombre">Hombre</label>
                </p>
                <p>
                  <input class="with-gap" name="sexo" type="radio" id="mujer" />
                  <label for="mujer">Mujer</label>
                </p>
              
            </div>
	        				
	        	<button class="btn waves-effect waves-light right" type="submit" name="action" style="margin-top:30px;">Registrar
    					<i class="material-icons right">mode_edit</i>
  					</button>

	        </div>
        </form>
      </div>
		</div>
	</div>
</div>

<footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Pink Feelin'</h5>
        <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Links</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
          </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      © 2016 Copyright Text
      <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
    </div>
  </div>
</footer>


  <script src="js/jquery.min.js"></script>
  <script src="js/materialize.min.js"></script> 

  <script>
  $(document).ready(function(){  
      $('.datepicker').pickadate({
        firstDay: true
    });
  }); 
  </script>
</body>


        

</html>