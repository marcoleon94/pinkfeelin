<?php 
require("menu.php");
require("footer.php")
?>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel=stylesheet href="css/materialize.css">
	<link rel=stylesheet href="css/main.css">
    <link rel="stylesheet" href="css/objfon.css">
 <head>
   <title>Pink Feelin'</title>
 </head>
 <body>
     <div class="menu">
        <?php menu("index.php"); ?>
     </div>
     <div class="container">
         <div class="center">
            <h2>El Detalle Perfecto</h2>
            <div class="divider"></div>
             <!-- Primera Sección-->
             <div class="row" style="margin:4%;">
                 <!-- Sección para collage de imagenes -->
                 <div class="col s9">
                     <div class="row">
                        <div class="col s3" style="margin:5px">
                            <img src="images/ring.jpg" class="responsive-img">
                         </div>
                         <div class="col s6">
                            <img src="images/accesories2.jpg" class="responsive-img">
                         </div>
                     </div>
                     <div class="row">
                         <div class="col s3" >
                            <img src="images/bag.jpg" class="responsive-img">
                         </div>
                         <div class="col s3">
                             <a href="vestidos.php" class="btn waves-effect red white-text darken-text-2">Ver ahora</a>
                         </div>
                         
                          <div class="col s3" >
                            <img src="images/shoes.jpg" class="responsive-img">
                         </div>
                        </div>
                     <div class="row">
                          <div class="col s3" >
                            <img src="images/shoes.jpg" class="responsive-img">
                         </div>
                         
                          <div class="col s3" >
                            <img src="images/shoes.jpg" class="responsive-img">
                         </div>
                        
                          <div class="col s3" >
                            <img src="images/shoes.jpg" class="responsive-img">
                         </div>
                        </div>
                     
                 </div>
                 <!-- Sección para inscripción al correo -->
                 <div class="col s3"> 
                     <h3  class="thin">Accesorios </h3><h3 class="bold">y ROPA</h3>
                     <p align="justify">
                        Párrafo. Haz clic aquí para agregar tu propio texto y editar.
                        Es fácil. Haz clic en Editar Texto o doble clic aquí para agregar tu contenido y cambiar la fuente. En este espacio puedes contar tu historia y permitir a tus usuarios saber más sobre ti.
                     </p>
                     <div class="row" >
                     <a href="https://www.facebook.com/PinkFeelin/"><img class="responsive-img" src="images/facebook.png" height="15%" width="15%"></a>
                     <a href="https://plus.google.com/"><img class="responsive-img" src="images/googleplus.png" height="15%" width="15%"></a>
                     <a href="https://es.pinterest.com/"><img class="responsive-img" src="images/pinterest.png" height="15%" width="15%"></a>
                     <a href="https://www.tumblr.com/"><img class="responsive-img" src="images/tumblr.png" height="15%" width="15%"></a>
                     <a href="https://twitter.com/"><img class="responsive-img" src="images/twitter.png" height="15%" width="15%"></a>
                     </div>
                     <div class="divider"></div>
                     <h5 class="thin" align="justify">Recibie noticias de nuestras exclusivas ofertas y nuestra nueva mercancía:</h5>
                     <form>
                         <div class="row">
                            <div class="input-field col s12 pink-text">
                              <input id="email" type="email" class="validate" >
                              <label class="left-align" for="email">Email</label>
                            </div>
                          </div>
                         <div class="row">
                             <div>
                             <button class="btn waves-effect waves-light" style="margin-top:30px;" type="submit" name="action" required>Registrate Ya!
                                <i class="material-icons right">mode_edit</i>
                              </button>
                             </div>
                          </div>
                     </form>
                 </div>
             </div>
             <!--Segunda Sección-->
             <div class="row" style="margin:4%;">
                <div class="col s5">
                    <h4 class="bold">Todo lo que necesitas para actualizar tu look.</h4>
                 </div>
                 <div class="col s1 headerDivider"></div>
                 <div class="col s6 ">
                 <p align="justify">Párrafo. Haz clic aquí para agregar tu propio texto y editar. Es fácil. Haz clic en Editar Texto o doble clic aquí para agregar tu contenido y cambiar la fuente. En este espacio puedes contar tu historia y permitir a tus usuarios saber más sobre ti.</p>
                 </div>
             </div>
             <!--Tercera Sección-->
             <div class="row">
                 <div class="col s9">
                     <img class="responsive-img" src="images/ofertas.jpg">
                 </div>
                 <div class="col s3">
                    <div class="carousel carousel-slider " data-indicators="true">
                        <div class="carousel-fixed-item center">
                          <a href="ofertas.php" class="btn waves-effect red white-text darken-text-2">Ofertas</a>
                        </div>
                        <div class="carousel-item black white-text" href="#one!">
                            <h5 class="italic-text">Oferta de verano</h5>
                            <h4>GRAN VENTA</h4>
                            <h4>25% - 50% desc.</h4>
                        </div>
                        <div class="carousel-item pink darken-2 white-text" href="#two!">
                            <h5 class="italic-text">Compra por Internet</h5>
                            <h4>Antes de que se acaben las ofertas</h4>
                            <h4>25% - 50% desc.</h4>
                        </div>
                     </div>
                 </div>
             </div>
             <!-- Cuarta Sección-->
             <div class="row ">
                 <h4 class="italic-text left-align" style="color:#f06292;">Nuestros Preferidos</h4>
             </div>
             <div class="row">
                 <div id="favoritos" class="carousel">
                    <a class="carousel-item " href="articulo.php" ><img class="responsive-img" src="images/fav1.jpg"></a>
                    <a class="carousel-item" href="articulo.php" ><img class="responsive-img" src="images/fav2.jpg"></a>
                    <a class="carousel-item" href="articulo.php" ><img class="responsive-img " src="images/fav3.jpg"></a>
                    <a class="carousel-item" href="articulo.php" ><img class="responsive-img " src="images/fav4.jpg"></a>
                    <a class="carousel-item" href="articulo.php" ><img class="responsive-img " src="images/fav5.jpg"></a>
                  </div>
             </div>
         </div>
     </div>
     <?php footer(); ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    
    
    <script>
        $( document ).ready(function(){
            $(".dropdown-button").dropdown();
            $(".button-collapse").sideNav();
            $('.modal-trigger').leanModal();
            $('.carousel.carousel-slider').carousel({full_width: true});
            $('.carousel').carousel({
            dist:0,
            shift:0,
            padding:20,
            });
            $(".dropdown-button").dropdown();
            autoplay()   
            function autoplay() {
            $('#favoritos').carousel('next');
            setTimeout(autoplay, 4000);
            }

        });
        
    </script>
 </body>
</html>