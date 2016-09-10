<html>
    <link rel=stylesheet href="css/materialize.min.css">
	<link rel=stylesheet href="css/materialize.css">
	<link rel=stylesheet href="css/main.css">
 <head>
   <title>Hello World</title>
 </head>
 <body>
     <?php require('menu.php');?>
     <div class="container">
         <div class="center">
            <h2>El Detalle Perfecto</h2>
            <div class="divider"></div>
             <div class="row" style="margin:4%;">
                 <div class="col s9">
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum lectus sit amet accumsan auctor. Fusce vel nunc rutrum, posuere magna vitae, iaculis velit. Mauris nec risus sodales, ullamcorper tortor quis, interdum ipsum. Vestibulum pulvinar fringilla ultrices. Etiam efficitur, purus ac consectetur rutrum, libero purus laoreet odio, in rhoncus erat purus id dolor. Aliquam auctor nulla eget pretium pretium. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque at pulvinar dui, non egestas dolor. Praesent pretium est metus, sit amet tincidunt enim congue eu. Vivamus pharetra purus eget orci posuere, ac maximus dolor ornare. Duis vitae semper elit, in dictum urna. Nunc vitae metus lacus. Suspendisse quis est fringilla, posuere turpis non, cursus tortor. Fusce venenatis non justo sit amet vehicula. Maecenas vel justo ut turpis luctus ornare. Phasellus ullamcorper egestas dolor, in sollicitudin odio.
                 </div>
                 <div class="col s3"> 
                     <h3  class="thin">Accesosrios </h3><h3 class="bold">Y ROPA</h3>
                     <p >
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
                     <h5 class="thin">Recibie noticias de nuestras ofertas y nuestra nueva mercancía:</h5>
                     <form>
                         <div class="row">
                            <div class="input-field col s12">
                              <input id="email" type="email" class="validate">
                              <label class="left-align" for="email">Email</label>
                            </div>
                             <div>
                             <button class="btn waves-effect waves-light" style="margin-top:30px; background-color:#f48fb1;" type="submit" name="action">Suscribete Ya!
                                <i class="material-icons right">send</i>
                              </button>
                             </div>
                          </div>
                     </form>
                 </div>
             </div>
             <div class="row" style="margin:4%;">
                <div class="col s5">
                    <h4 class="bold">Todo lo que necesitas para actualizar tu look.</h4>
                 </div>
                 <div class="col s1 headerDivider"></div>
                 <div class="col s6 ">
                 <p >Párrafo. Haz clic aquí para agregar tu propio texto y editar. Es fácil. Haz clic en Editar Texto o doble clic aquí para agregar tu contenido y cambiar la fuente. En este espacio puedes contar tu historia y permitir a tus usuarios saber más sobre ti.</p>
                 </div>
             </div>
             <div class="row">
                 <div class="col s9">
                     <img class="responsive-img" src="images/ofertas.jpg">
                 </div>
                 <div class="col s3">
                    <div class="carousel carousel-slider " data-indicators="true">
                        <div class="carousel-fixed-item center">
                          <a class="btn waves-effect red white-text darken-text-2">Ofertas</a>
                        </div>
                        <div class="carousel-item black white-text" href="#one!">
                            <h5 class="italic-text">Oferta de verano</h6>
                            <h4>GRAN VENTA</h5>
                            <h4>25% - 50% desc.</h5>
                        </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    
    
    <script>
        $( document ).ready(function(){
            $('.carousel.carousel-slider').carousel({full_width: true});
        });
    </script>
 </body>
</html>