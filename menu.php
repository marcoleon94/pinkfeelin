<html lang="es">
   <head>
      <!--Import Google Icon Font-->
       <link rel="stylesheet" href="css/objfon.css">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
       

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <!--<div class="navbar-fixed">-->
        <nav class="pink lighten-3">
            <div class="nav-wrapper">
                 <a href="#!" class="left brand-logo"><img class="responsive-img" src="images/Lips.png" width="4%" height="4%"> Pink Feelin'</a>
                <a href="#" data-activates="nav-mobile" class="button-collapse right"><i class="material-icons">menu</i></a>
                  <div class="row hide-on-med-and-down">
                      <div class="col push-s4 hoverable"><a href="login.php">Inicio</a></div>
                      <div class="col push-s4 hoverable"><a href="tienda.php">Tienda</a></div>
                      <div class="col push-s4 hoverable"><a href="ofertas.php">Ofertas</a></div>
                      <div class="col push-s4 hoverable" ><a href="contacto.php">Contáctanos</a></div>
                      <div class="col push-s4 hoverable"><a href="atencion.php">Atención al Cliente</a></div>
                      <div class="col push-s4 hoverable"><a href="login.php">Login</a></div>
                    </div>
                  <ul class="side-nav" id="nav-mobile">
                    <li><a href="login.php">Inicio</a></li>
                    <li><a href="tienda.php">Tienda</a></li>
                    <li><a href="ofertas.php">Ofertas</a></li>
                    <li><a href="contacto.php">Contáctanos</a></li>
                    <li><a href="atencion.php">Atención al Cliente</a></li>
                    <li><a href="login.php">Login</a></li>
                  </ul>
            </div>
        </nav>
        <!--</div>-->
    </body>
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    
    
    <script>
        $( document ).ready(function(){
            $(".button-collapse").sideNav();
        });
    </script>    
</html>