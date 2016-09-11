<html>
	<link rel=stylesheet href="css/materialize.css">
	<link rel=stylesheet href="css/main.css">
    <link rel="stylesheet" href="css/objfon.css">
 <head>
   <title>Pink Feelin'</title>
 </head>
 <body>
     <?php require('menu.php');?>
     <div class="container">
         <div class="center">
            <h2>Los Mejores Vestidos</h2>
            <div class="divider"></div>
             <!-- Primera Sección-->
             <div class="row" style="margin:4%;">
                 <?php for($x=1;$x<=9;$x++){ ?>
                 <div class="col s4 m4">
                    <div class="card">
                        <div class="card-image">
                          <img class="responsirve-img materialboxed" src="images/vestido.jpg">
                          <span class="card-title"><?php echo "Vestido $x"; ?></span>
                        </div>
                        <div class="card-content pink lighten-2">
                          <p>Modelo unitalla. 
                              Vestido negro floreado.
                                $450 MNX.</p>
                        </div>
                        <div class="card-action">
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
    
    
    <script>
        $( document ).ready(function(){
            $('.carousel.carousel-slider').carousel({full_width: true});
            $('.carousel').carousel({
            dist:0,
            shift:0,
            padding:20,
            });
            autoplay()   
            function autoplay() {
            $('#favoritos').carousel('next');
            setTimeout(autoplay, 4000);
            }

        });
        
    </script>
 </body>
</html>