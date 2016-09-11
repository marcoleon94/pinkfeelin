<?php 
require("menu.php");
require("footer.php");
?>
<html>
	<link rel=stylesheet href="css/materialize.css">
	<link rel=stylesheet href="css/main.css">
    <link rel="stylesheet" href="css/objfon.css">
 <head>
   <title>Contacto</title>
 </head>
 <body>
    <div class="menu">
        <?php menu(); ?>
    </div>
     <div class="container">
         <div class="center">
            <h2>Contactanos</h2>
            <div class="divider"></div>
             <!--Segunda Sección-->
             <div class="row" style="margin:4%; text-align:justify;">
                <div class="col s4">
                    <div class="card bordered" style="margin:5% auto; max-width:400px; border-radius: 13px;">
                        <div class="card-header" style="background-color: #f48fb1; color: white; border-top-left-radius: 13px; border-top-right-radius: 13px; padding-left: 10px;">
                            <div class="row">   
                                <div class="col s12 left-align">
                                    <h5>Redes Sociales</h5>
                                </div>
                            </div> 
                        </div>
                
                        <div class="card-content" style="padding-left: 30px; padding-right: 30px;">
                                <div class="row"><p>Contactanos en cualquiera de las siguientes redes sociales.</p></div>
                                    <div class="row" >
                                         <a href="https://www.facebook.com/PinkFeelin/"><img class="responsive-img" src="images/facebook.png" height="15%" width="15%"></a>
                                         <a href="https://plus.google.com/"><img class="responsive-img" src="images/googleplus.png" height="15%" width="15%"></a>
                                         <a href="https://es.pinterest.com/"><img class="responsive-img" src="images/pinterest.png" height="15%" width="15%"></a>
                                         <a href="https://www.tumblr.com/"><img class="responsive-img" src="images/tumblr.png" height="15%" width="15%"></a>
                                         <a href="https://twitter.com/"><img class="responsive-img" src="images/twitter.png" height="15%" width="15%"></a>
                                    </div>
                             </div>
                        </div>
                    </div>


                <div class="col s4 ">
                    <div class="card bordered" style="margin:5% auto; max-width:400px; border-radius: 13px;">
                        <div class="card-header" style="background-color: #f48fb1; color: white; border-top-left-radius: 13px; border-top-right-radius: 13px; padding-left: 10px;">
                            <div class="row">   
                                <div class="col s12 left-align">
                                    <h5>Servicio al cliente</h5>
                                </div>
                            </div> 
                        </div>
                
                        <div class="card-content" style="padding-left: 30px; padding-right: 30px;">
                                <div class="row"><h4 class=" thin" style="font-style:italic; text-align:center;"></h4></div>
                                <div class="row"><p>Telefono: 449-192-17-27 <br>
                                        Horarios: lunes a viernes de 8am a 6pm <br>
                                        e-mail:pinkfeelin@gmail.com
                                     </p></div>
                        </div>
                    </div>
                 </div>


                <div class="col s4 ">
                    <div class="card bordered" style="margin:5% auto; max-width:400px; border-radius: 13px;">
                            <div class="card-header" style="background-color: #f48fb1; color: white; border-top-left-radius: 13px; border-top-right-radius: 13px; padding-left: 10px;">
                                <div class="row">   
                                    <div class="col s12 left-align">
                                        <h5>Direcciones</h5>
                                    </div>
                                </div> 
                            </div>
                    
                            <div class="card-content" style="padding-left: 30px; padding-right: 30px;">
                                    <div class="row"><p>Local 1: Del Carmen 420-422, Colonia del Carmen, Aguascalientes, Ags.<br> <br>
                                        Local 2: Río Pirules 252, San Pablo, Aguascalientes, Ags.<br> <br>
                                        Local 3: General José María Arteaga 647, Primavera, Aguascalientes, Ags.<br>
                                    </p></div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    
    <div class="footer">
        <?php footer(); ?>
    </div>
    <script>
        $( document ).ready(function(){
            $(".dropdown-button").dropdown();
            $(".button-collapse").sideNav();
            $('.modal-trigger').leanModal();
        });
        
    </script>
 </body>
</html>