<?php 
require("menu.php");
require("footer.php");
?>
<html lang="es">
	<link rel=stylesheet href="css/materialize.css">
	<link rel=stylesheet href="css/main.css">
    <link rel="stylesheet" href="css/objfon.css">
 <head>
    <meta charset="UTF-8">
    <title>Atencion al Cliente</title>
 </head>
 <body>
    <div class="menu">
        <?php menu("atencion.php"); ?>
    </div>
     <div class="container">
         <div class="center">
            <h2>Atencion al Cliente</h2>
            <div class="divider"></div>
             <!--Segunda Sección-->
             <div class="row" style="margin:4%; text-align:left;">
                <div class="col s6">
                    <div class="card bordered" style="margin:5% auto; border-radius: 13px;">
                        <div class="card-header" style="background-color: #f48fb1; color: white; border-top-left-radius: 13px; border-top-right-radius: 13px; padding-left: 10px;">
                            <div class="row">
                                <div class="col s12 left-align">
                                    <h5>Misíon</h5>
                                </div>
                            </div> 
                        </div>
                
                        <div class="card-content" style="padding-left: 30px; padding-right: 30px; height: 300px;">
                                <div class="row">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                        </div>
                    </div>
                </div>


                <div class="col s6 ">
                    <div class="card bordered" style="margin:5% auto; border-radius: 13px;">
                        <div class="card-header" style="background-color: #f48fb1; color: white; border-top-left-radius: 13px; border-top-right-radius: 13px; padding-left: 10px;">
                            <div class="row">
                                <div class="col s12 left-align">
                                    <h5>Politica de Privacidad</h5>
                                </div>
                            </div> 
                        </div>
                
                        <div class="card-content" style="padding-left: 30px; padding-right: 30px; height: 300px;">
                                <div class="row">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>        
                        </div>
                    </div>
                 </div>


                <div class="col s6 ">
                    <div class="card bordered" style="margin:5% auto; border-radius: 13px;">
                            <div class="card-header" style="background-color: #f48fb1; color: white; border-top-left-radius: 13px; border-top-right-radius: 13px; padding-left: 10px;">
                                <div class="row">   
                                    <div class="col s12 left-align">
                                        <h5>Atención al cliente Política de Devolución y Reembolso</h5>
                                    </div>
                                </div> 
                            </div>
                    
                            <div class="card-content" style="padding-left: 30px; padding-right: 30px; height: 300px;">
                                    <div class="row">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>
                                    </div>
                            </div>
                    </div>
                </div>


                <div class="col s6 ">
                    <div class="card bordered" style="margin:5% auto; border-radius: 13px;">
                            <div class="card-header" style="background-color: #f48fb1; color: white; border-top-left-radius: 13px; border-top-right-radius: 13px; padding-left: 10px;">
                                <div class="row">   
                                    <div class="col s12 left-align">
                                        <h5>100% Seguridad</h5>
                                    </div>
                                </div> 
                            </div>
                    
                            <div class="card-content" style="padding-left: 30px; padding-right: 30px; height: 300px;">
                                    <div class="row">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>
                                    </div>
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