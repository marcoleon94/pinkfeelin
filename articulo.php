<?php
require('menu.php');
require('footer.php');
?>
<html>
	<link rel=stylesheet href="css/materialize.css">
	<link rel=stylesheet href="css/main.css">
    <link rel="stylesheet" href="css/objfon.css">
 <head>
   <title>Pink Feelin'</title>
 </head>
 <body>
     <?php menu("vestidos.php"); ?>
     <div class="container">
         <div class="center">
            <h2>Artículo X</h2>
            <div class="divider"></div>
             <!-- Primera Sección-->
             <div class="row">
                <div class="col s3 push-s3" style="margin: 1%;">
                    <img class="materialboxed" src="images/vestido.jpg" />
                </div> 
             </div>
             <div class="row">
                 <div class="col s10 push-s1">
                  <div class="card pink darken-2 ">
                    <div class="card-content white-text pink lighten-3">
                      <span class="card-title">Vestido X</span>
                      <p>Modelo unitalla. 
                              Vestido negro floreado.
                                $450 MNX.</p>
                    </div>
                    <div class="card-action">
                      <a href="#">Añadir a tu carrito</a>
                    </div>
                  </div>
                </div>       
                    
                  
             </div>
         </div>
     </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
     <!-- Lets load up prefixfree to handle CSS3 vendor prefixes -->
     <script src="js/prefixfree.min.js" type="text/javascript"></script>
     <!-- You can download it from http://leaverou.github.com/prefixfree/ -->

     <!-- Time for jquery action ->
     <script src="http://thecodeplayer.com/uploads/js/jquery-1.7.1.min.js" type="text/javascript"></script>-->
    <?php footer(); ?>
    
    <script>
        $( document ).ready(function(){
         $(".dropdown-button").dropdown();
        $(".button-collapse").sideNav();
        $('.modal-trigger').leanModal();    

        });
        
    </script>
 </body>
</html>