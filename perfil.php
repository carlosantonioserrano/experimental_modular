  
  <?php 

 include("seguridad.php"); 
 
  ?> 


  <?php

include("conexion.php");
$link=conecta();




if (isset($_REQUEST['mtv'])) {
$movistar = $_REQUEST['mtv'];
} else {
$movistar = "";
}

if (isset($_REQUEST['o_pos'])) {
$pos = $_REQUEST['o_pos'];
} else {
$pos = "";
}

if (isset($_REQUEST['o_pre'])) {
$pre = $_REQUEST['o_pre'];
} else {
$pre = "";
}

if (isset($_REQUEST['paquetes'])) {
$paquetes = $_REQUEST['paquetes'];
} else {
$paquetes = "";
}

if (isset($_REQUEST['promociones'])) {
$promociones = $_REQUEST['promociones'];
} else {
$promociones = "";
}


$usuario= $_SESSION["usuarioactual"];


//$usuario="erickcillo";
//$usuario="robmarv";

$reg="1";


$sql="SELECT cat1, cat2, cat3, cat4, cat5, usuario, reg, nombres, apellidos, area FROM categorias_intra WHERE usuario = '$usuario'";
$result=mysql_query($sql,$link);

?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Menu</title>
  
  
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style_seleccionados.css">

  <style>
a:link, a:visited {
    
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}




.btn {
  background: #5BC500;
  background-image: -webkit-linear-gradient(top, #5BC500, #5BC500);
  background-image: -moz-linear-gradient(top, #5BC500, #5BC500);
  background-image: -ms-linear-gradient(top, #5BC500, #5BC500);
  background-image: -o-linear-gradient(top, #5BC500, #5BC500);
  background-image: linear-gradient(to bottom, #5BC500, #5BC500);
  font-family: Arial;
  color: #ffffff;
  font-size: 25px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
</style>


        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/demo.css">
        <!-- Pushy CSS -->
        <link rel="stylesheet" href="css/pushy.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <link rel="stylesheet" type="text/css" href="css/main.css">


</head>

<body>
<div id="contenedor_carga">
      <div id="carga"></div>
    </div>

        <header class="site-header push">!Parece que este será un excelente día!</header>

        <!-- Pushy Menu -->
        <nav class="pushy pushy-left" data-focus="#first-link">
            <div class="pushy-content">
                <ul>
                    <li class="pushy-submenu">
                        <button id="first-link">Configuracion</button>
                        <ul>
                            <li class="pushy-link"><a href="salir.php">Salir</a></li>
                            <li class="pushy-link"><a href="delet_modulos.php?usuario=<?php echo "$usuario";?>">Reiniciar</a></li>
                            <li class="pushy-link"><a href="modificar.php?usuario=<?php echo "$usuario";?>">Modificar</a></li>
                        </ul>
                    </li>
                    <li class="pushy-submenu">
                        <button>Perfil</button>
                        <ul>
                            <li class="pushy-link"><a href="#">Editar Perfil</a></li>
                            <!--<li class="pushy-link"><a href="#">Item 2</a></li>
                            <li class="pushy-link"><a href="#">Item 3</a></li>
                        </ul>
                    </li>
                    <li class="pushy-submenu">
                        <button>Submenu 3</button>
                        <ul>
                            <li class="pushy-link"><a href="#">Item 1</a></li>
                            <li class="pushy-link"><a href="#">Item 2</a></li>
                            <li class="pushy-link"><a href="#">Item 3</a></li>
                        </ul>
                    </li>
                    <li class="pushy-submenu">
                        <button>Submenu 4</button>
                        <ul>
                            <li class="pushy-link"><a href="#">Item 1</a></li>
                            <li class="pushy-link"><a href="#">Item 2</a></li>
                            <li class="pushy-link"><a href="#">Item 3</a></li>
                        </ul>
                    </li>
                    <li class="pushy-link"><a href="#">Item 1</a></li>
                    <li class="pushy-link"><a href="#">Item 2</a></li>
                    <li class="pushy-link"><a href="#">Item 3</a></li>*-->
                    <li class="pushy-link"><a href="aafc9c4cc91cc10591a2167ca47d24b1_mis_modulos.php"><img src="images/ojo.png">Mis Módulos</a></li>
                </ul>
            </div>
        </nav>

          <div class="site-overlay"></div>

        <!-- Your Content -->
        <div id="container">
            <!-- Menu Button -->
            <button class="menu-btn">&#9776;</button>


  <div class="middle">
  <font face="Arial" size="5" color="#FFFFFF"><font face="Arial" size="5" color="#FFCC33"><?php echo "$usuario";?></font> Este es tu perfil</font>
  <br>
  <label>
    <br>
    <form action="" method="get">

<?php

while($row = mysql_fetch_array($result)) {

   
  $dat1 = $row[5];
  $dat2 = $row[7];
  $dat3 = $row[8];
  $dat4 = $row[9];
}
//mysql_free_result($sql);
//mysql_close($link); //Cierras la Conexión
?>

<link rel='stylesheet prefetch' href='modulos/css/font-awesome.min.css'>

<link rel="stylesheet" href="modulos/css/style.css">

<style type="text/css">
/*Responsive table*/
table {
 width: 100%;
 border-collapse: collapse;
 background: #00C1E0;
 border: 1.2px dashed #FFFFFF;
 color: #f3f3f3;
}
 
td, th {
 padding: 8px;
 text-align: left;
}
</style>

<style type="text/css">

::-moz-selection {
background:#f0bf00;
color:#333;
}
::selection {
background:#f0bf00;
color:#333;
}
/*---------- FORMS ----------*/

input[type=text], input[type=submit], textarea {
  width: 100%;
  padding: 0.5em;
  font-size: 1em;
  margin-bottom: 1.5em;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}

img {
   max-width: 100%;
    height: auto;
    border: 1.2px dashed #FFFFFF;
}


</style>

<div align="center">
  <form name="form" action="" method="POST">
<table width="923" height="314" border="0">
  <tr>
    <td height="32" colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td width="199" height="36" ><div align="center" class="Estilo8"><span class="Estilo9">Usuario:</span></div></td>
    <td width="445" ><input type="text" name="nombres" value="<?php echo $dat1;?>"></td>
    <td width="265" rowspan="4" ><div align="center"><img src="img/foto.png"></div></td>
  </tr>
  <tr>
    <td height="53" ><div align="center" class="Estilo8"><span class="Estilo9">Nombres:</span></div></td>
    <td ><input type="text" name="nombres" value="<?php echo $dat2;?>"></td>
  </tr>
  <tr>
    <td height="64"><div align="center" class="Estilo8"><span class="Estilo9">Apellidos:</span></div></td>
    <td ><input type="text" name="nombres" value="<?php echo $dat3;?>"></td>
  </tr>
  <tr>
    <td height="64" ><div align="center" class="Estilo8"><span class="Estilo9">Area:</span></div></td>
    <td ><input type="text" name="nombres" value="<?php echo $dat4;?>"></td>
  </tr>
  <tr>
    <td height="47" colspan="3" ><input type="submit" value="Modificar Perfil"></td>
  </tr>
</table>
</form>
</div>



<!--<label>
  <input type="checkbox" name="radio"/>
  <div class="back-end box">
    <span>Paquetes</span>
  </div>
</label>


<label>
  <input type="checkbox" name="radio"/>
  <div class="back-end box">
    <span>Promociones</span>
  </div>
</label>


<label>
  <input type="checkbox" name="radio"/>
  <div class="back-end box">
    <span>Oferta E&N</span>
  </div>
</label>-->

<br><br>

<!--<a href="enviar_modulos.php" class="btn" onclick="document.form.submit();return false">Continuar</a>-->

<!--<center><H1><font face="Arial" color="#FFFFFF"><a href="#">CONTINUAR</H1></a><center>-->

</form>




</div>

 
    </div>

        
        <!-- Pushy JS -->
        <script src="js/pushy.min.js"></script>




</body>

</html>
  <script type="text/javascript">
    window.onload= function(){
      var contendor = document.getElementById('contenedor_carga');
      contendor.style.visibility='hidden';
      
    }
  </script>