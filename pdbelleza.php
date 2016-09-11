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
     <?php menu("pdbelleza.php");?>
     <div class="container">
         <div class="center">
            <h2>Productos para ella</h2>
            <div class="divider"></div>
             <!-- Primera Sección-->
             <div class="row" style="margin:4%;">
                 <?php for($x=1;$x<=9;$x++){ ?>
                 <div class="col s4 m4">
                    <div class="card">
                        <div class="card-image">
                          <img class="responsirve-img materialboxed" src="images/producto.jpg">
                          <span class="card-title"><?php echo "Producto $x"; ?></span>
                        </div>
                        <div class="card-content pink lighten-2">
                          <p>Labiales.
                                Variedad de colores.
                                $100 MNX.</p>
                        </div>
                        <div class="card-action pink darken-4">
                          <a href="#">Añadir a tu carrito</a>
                        </div>
                      </div>
                 </div> 
                 <?php } ?>
             </div>
         </div>
     </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
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