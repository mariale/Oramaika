 <?php  session_start();?>
<!DOCTYPE HTML>
<html>
<head>
<title>Perfil de Usuario</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<style type="text/css">
</style>
<noscript>
<link rel="stylesheet" href="css/5grid/core.css" />
<link rel="stylesheet" href="css/5grid/core-desktop.css" />
<link rel="stylesheet" href="css/5grid/core-1200px.css" />
<link rel="stylesheet" href="css/5grid/core-noscript.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/style-desktop.css" />
<link rel="stylesheet" href="css/least.min.css" />
</noscript>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.lazyload.min.js"></script>
<script src="js/least.min.js?03072013"></script>
<script src="js/prism.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none&amp;mobileUI.openerWidth=52"></script>
</head><body class="twocolumn2">
<div id="wrapper">
	<div id="header-wrapper">
		<header id="header">
			<div class="5grid-layout">
				<div class="row">
					<div class="12u" id="logo"> <!-- Logo -->
						<h1>&nbsp;</h1>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
				  </div>
				</div>
			</div>
			<div class="5grid-layout">
				<div class="row">
					<div class="12u" id="menu">
						<div id="menu-wrapper">
							<nav class="mobileUI-site-nav">
								<ul>
									<li><a href="index_usa.php">Inicio</a></li>
                  <li ><a href="Promocion.php">Promociones</a></li>
                  <li><a href="Reservacion.php">Reservación</a></li>
                  <li class="current_page_item"><a href="Modificacion_Reg.php">Perfil de Usuario</a></li>
                  <li><a href="Dex.php">Cerrar Sesión</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
	</div>
	<div id="page-wrapper" class="5grid-layout">
		<div class="row">
			<div class="3u">
				<div id="sidebar2">
					<section>
            <br><br> <br><br><br><br><br>
						<a href="#"><img src="images/X01.jpg" alt="" class="img-alignleft"></a>	
						<div class="sbox2">
						</div>
					</section>
				</div>
			</div>
			<div class="9u mobileUI-main-content">
				<div id="content">
					<section>
						<div class="post" align="left">
							<h2 align="right"> Perfil: <?php echo $_SESSION['Nombre_usa']; echo " "; echo $_SESSION['apellido_usa']; ?></h2>
						  	<section>
             	  <form method="POST" name="registrodeusa" >
             	      <h12>
                     <p>
             	      	 	 <span class="Estilo2">Cedula: </span>
             	      	 	<input name="Cedula" type="number" readonly="readonly" class="laR" value="<?php echo $_SESSION["cedula"]; ?>" maxlength="9" required title="INGRESANDO LA CEDULA SIN CARACTERES ESPECIALES"  placeholder="Ej:10998998" >
 	      	    		   </p>
                     <p>
                      	<span class="Estilo1 Estilo2">Nombres (*)</span>
             	      	  	<input name="Nombre" type="text" class="laR"   value="<?php echo  $_SESSION["Nombre_usa"]; ?>"maxlength="25" required title="INGRESANDO EL NOMBRE"  placeholder="Ej:juan carlos">
     	      	    	</p>
                      <p>
                      	 <span class="Estilo1 Estilo2">Apellidos (*)</span>
             	      	  	<input name="Apellido" type="text" value="<?php echo  $_SESSION["apellido_usa"]; ?>" class="laR"  maxlength="25" required title="INGRESANDO LOS APELLIDOS"  placeholder="Ej:perez perez">
     	      	    	</p>
           	      	<p>
                        <span class="Estilo1 Estilo2">Telefono Local (*)</span>
       	      	  	  	<input name="THabitacion" type="number" value="<?php echo  $_SESSION["telefono_h"]; ?>" class="laR"  maxlength="14"  required title="INGRESANDO EL TELEFONO LOCAL CON CODIGO DE AREA"  placeholder="Ej:02763434455">
   	      	    	</p>
                      
                       <p>
                         <span class="Estilo1 Estilo2">Telefono Movil</span>
                         <input name="TCelular" type="number" value="<?php echo  $_SESSION["telefono_c"]; ?>" class="laR"  maxlength="14"  title="INGRESANDO EL TELEFONO MOVIL CON "  placeholder="Ej:04247766555">
                        </p>
                       <p>
                       	<span class="Estilo1 Estilo2">Fecha de Nacimiento (*)</span>
             	      	  	<input name="Fnacimiento" value="<?php echo  $_SESSION["fecha_nacimi"]; ?>" type="Date" readonly="readonly" class="laR"  >
     	      	    	</p>
     	      	    	<p>
                      	<span class="Estilo1 Estilo2">Estado (*)</span>
             	      	  	<input name="estado" type="text" class="laR"  maxlength="25" required title="INGRESANDO EL ESTADO"  placeholder="Ej:Tachira">
     	      	    	</p>
     	      	    	<p>
                      	<span class="Estilo1 Estilo2">Ciudad (*)</span>
             	      	  	<input name="ciudad" type="text" class="laR"  maxlength="25" required title="INGRESANDO LA CIUDAD"  placeholder="Ej:Sna Cristobal">
     	      	    	</p>
     	      	    	<p>
                      	<span class="Estilo1 Estilo2">Sector (*)</span>
             	      	  	<input name="sector" type="text" class="laR"  maxlength="25" required title="INGRESANDO EL SECTOR DONDE VIVE"  placeholder="Ej:Paramillo">
     	      	    	</p>
     	      	    	<p>
                       	<span class="Estilo1 Estilo2">E-Mail(*)</span>
             	      	  	<input name="Email" type="email" value="<?php echo $_SESSION['email']; ?>" readonly="readonly" class="laR" required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" title="INGRESANDO EL TELEFONO LOCAL CON CODIGO DE AREA"  placeholder="Ej:juan@empresa.com">
     	      	    	</p>
                       <p>
                       	<span class="Estilo1 Estilo2">Contraseña (*)</span>
             	      	  	<input name="Contraseña1" type="password" class="laR"   title="INGRESANDO LA CONTRASEÑA" placeholder="Debe ser mayor de 6 caracteres">
     	      	    	</p>
                       <p>
                       	<span class="Estilo1 Estilo2">Confirmación de Contraseña (*)</span>
             	      	  	<input name="Contraseña2" type="password" class="laR"  title="INGRESANDO LA CONTRASEÑA" placeholder="Debe ser mayor de 6 caracteres">
     	      	    	</p>
                       <p><br>
         	      	      <input  name="Modifi" id="Modifi" value="MODIFICAR" type="submit"  class="input-botonC"  >
             	      	  
     	      	   </p> </h12>
             	  </form>	
              </section>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="copyright" class="5grid-layout">
	<section>
		<p>&copy;2014 Oramaika   | Diseño:  Ing. Software UNET</p>
        <p><a href="https://www.facebook.com/embarcadero.chichirivicheedofalcon">FACEBOOK: Embarcadero Oramaika</a></p>
	</section>
</div>
</body>
<?php 
if (isset($_POST['Modifi']))
{
  	$password=$_POST['Contraseña1'];
  	if (strlen($password) < 6) 
  	{
  		  $ban=false;
  		  echo "<script type='text/javascript'>alert('AVISO: La contraseña es demasiado corta. Por favor, introduzca al menos 6 caracteres');</script>";  
  	} 
  	else
  	{
  		  if ( $password != $_POST["Contraseña2"]) 
  		  {
  			   echo "<script type='text/javascript'>alert('AVISO: Las contraseñas no coinciden. Por favor, inténtelo de nuevo');</script>";
  			   $ban=false;
  		  }
  		  else
  		  {
  			   $ban=true;
  		  }
  	}
  	if ($ban==true) 
  	{
  	 	  $link = mysql_connect('localhost', 'root')
  	    or die('No se pudo conectar: ' . mysql_error());
  		  mysql_select_db('oramaika') or die('No se pudo seleccionar la base de datos');
  		  //variables String
        $nombre=mysql_real_escape_string($_POST['Nombre']);
        $apellido=mysql_real_escape_string($_POST['Apellido']);
        $estado=mysql_real_escape_string($_POST['estado']);
        $ciudad=mysql_real_escape_string($_POST['ciudad']);
        $sector=mysql_real_escape_string($_POST['sector']);
        $clave=mysql_real_escape_string($_POST['Contraseña1']);
        //variable Number
        $telf_local=mysql_real_escape_string($_POST['THabitacion']);
        $telf_cel=mysql_real_escape_string($_POST['TCelular']);
        //Variables Date
        $direccion=$estado." ".$ciudad." ".$sector;  
        $ci=$_SESSION["cedula"];
        $sqlUpdate=mysql_query("UPDATE usua SET  nom_usa='$nombre',
                                        ape_usa='$apellido',
                                        tel_hab_usa='$telf_local',
                                        tel_cel_usa='$telf_cel',
                                        pass_usa='$clave',
                                        direc_usa='$direccion'
                                WHERE id_ci='$ci' ",$link);
        	$my_error = mysql_error($link);
          if ($my_error) 
          {
               echo "<script type='text/javascript'>alert('AVISO: Error en la insercion de datos');</script>";
          } 
          else
          {
            echo "<script type='text/javascript'>alert('AVISO: Se han actualizado  sus datos y su sesion sera cerrada');</script>";
            mysql_close($link);
            ?><script type="text/javascript">
              window.location="Dex.php";
              </script>
            <?php
  	    	}         
      }mysql_close($link);
  }
?>
</html>