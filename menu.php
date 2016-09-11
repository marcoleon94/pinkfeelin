<?php
function menu($page){ ?>
        <!-- Dropdown Structure -->
                    <ul id="dropdown1" class="dropdown-content">
                      <li><a href="vestidos.php">Vestidos</a></li>
                      <li><a href="bolsas.php">Bolsas</a></li>
                      <li><a href="lentes.php">Lentes</a></li>
                      <li><a href="pdbelleza.php">Productos de Belleza</a></li>
                    </ul>
                    
        <!--<div class="navbar-fixed">-->
        <nav class="pink lighten-3">
            <div class="nav-wrapper">
                 <a href="#!" class="left brand-logo"><img class="responsive-img" src="images/Lips.png" width="4%" height="4%"> Pink Feelin'</a>
                <a href="#" data-activates="nav-mobile" class="button-collapse right"><i class="material-icons">menu</i></a>
                  <div class="row hide-on-med-and-down">
                      <div class="col push-s4">
                        <ul class="right hide-on-med-and-down">
                            <?php if($page=="index.php"){           ?>
                                <li class="active"><a href="index.php">Inicio</a></li>
                                <?php    }else{ ?>
                                <li><a href="index.php">Inicio</a></li>
                                <?php } ?>
                          <!-- Dropdown Trigger -->
                            <?php if($page=="vestidos.php" or $page=="bolsas.php" or $page=="lentes.php" or $page=="pdbelleza.php"){           ?>
                                <li class="active"><a class="dropdown-button" href="#!" data-activates="dropdown1">Tienda<i class="material-icons right">arrow_drop_down</i></a></li>
                                <?php    }else{ ?>
                                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Tienda<i class="material-icons right">arrow_drop_down</i></a></li>
                                <?php } ?>
                             <?php if($page=="ofertas.php"){           ?>
                                <li class="active"><a href="ofertas.php">Ofertas</a></li>
                                <?php    }else{ ?>
                                <li><a href="ofertas.php">Ofertas</a></li>
                                <?php } ?>
                             <?php if($page=="contacto.php"){           ?>
                                <li class="active"><a href="contacto.php">Contactanos</a></li>
                                <?php    }else{ ?>
                                <li><a href="contacto.php">Contactanos</a></li>
                                <?php } ?>
                             <?php if($page=="atencion.php"){           ?>
                                <li class="active"><a href="atencion.php">Atención al Cliente</a></li>
                                <?php    }else{ ?>
                                <li><a href="atencion.php">Atención al Cliente</a></li>
                                <?php } ?>
                            <li><a data-target="modal1" class="modal-trigger">Login</a></li>
                        </ul>
                      </div>
                    </div>
                  <ul class="side-nav" id="nav-mobile">
                    <li><a href="index.php">Inicio</a></li>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                          <li>
                            <a class="collapsible-header">Tienda<i class="material-icons">arrow_drop_down</i></a>
                            <div class="collapsible-body">
                              <ul id="dropdown2">
                              <li><a href="vestidos.php">Vestidos</a></li>
                              <li><a href="bolsas.php">Bolsas</a></li>
                              <li><a href="lentes.php">Lentes</a></li>
                              <li><a href="pdbelleza.php">Productos de Belleza</a></li>
                            </ul>
                            </div>
                          </li>
                        </ul>
                    </li>
                   <! <li><a href="ofertas.php">Ofertas</a></li>
                    <li><a href="contacto.php">Contáctanos</a></li>
                    <li><a href="atencion.php">Atención al Cliente</a></li>
                    <li><a href="login.php">Login</a></li>-->
                  </ul>
            </div>
        </nav>
<div class="modal" id="modal1">
<div class="modal-content">
<div class="page-login">
	<div class="center">
		
           		<div class="row">	
          			<div class="col s2">
              			<i class="material-icons medium" style="color:#f48fb1;">perm_identity</i>
          			</div>
          			<div class="col s10 left-align" style="margin-top:15px; color:#f48fb1;">
            			<h4>Inicia Sesion</h4>
          			</div>
        		</div> 
        	
        		<form>
	        			<div class="row">
	        				<div class="input-field col s12">
	        					<i class="material-icons prefix">account_circle</i>
	        					<input type="text" id="usuario" class="validate" >
	        					<label for="usuario" class="left-align"> Usuario</label>
	        				</div>

	        				<div class="input-field col s12">
	        					<i class="material-icons prefix">lock</i>
	        					<input type="password" id="contra" class="validate">
	        					<label for="contra" class="left-align" >Contraseña</label>
	        				</div>
	        			</div>
	        			<div class="row">
	        				<div class="col s4" style="margin-top:50px;">
	        					<a href="registro.php" style="color: #f48fb1;">Registrarse</a>
	        				</div>
	        				<div class="col s8">
		        				<button class="btn waves-effect waves-red right" type="submit" name="action" style="margin-top:30px;">Iniciar Sesion
	    							<i class="material-icons right">input</i>
	  							</button>
  							</div>
	        			</div>
        		</form>
        
		
	</div>
</div>
</div>
</div>
        <!--</div>-->
<?php } ?>
