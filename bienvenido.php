<?php include("seguridad.php"); ?> 
<html> 
<head> 
<title>App</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<style type="text/css">
<!--
.Estilo1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #FFFFFF;
}
body {
	background-color: #0099CC;
}
.Estilo2 {color: #FFFFFF}
.Estilo3 {color: #FFFF00}
.Estilo4 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
}
a:link {
	color: #FFFFFF;
	text-decoration: none;
}
a:visited {
	color: #FFFFFF;
	text-decoration: none;
}
a:hover {
	color: #CCCCCC;
	text-decoration: none;
}
a:active {
	color: #CCCCCC;
	text-decoration: none;
}
-->
</style>
</head> 
<body> <h1 align="center" class="Estilo2"><br>
  <br>
  <br>
  Bienvenido!!!</h1> 
<h2 align="center"><span class="Estilo2">Usuario:</span> <span class="Estilo3"><?php echo $_SESSION["usuarioactual"] ?></span> </h2>
<div align="center"><br> 
</div>
<p align="center" class="Estilo1">Ingreso correctamente a está sección.</p>
<div align="center"><br>
  <br> 
    <a href="salir.php" class="Estilo4">Salir</a> 
</div>
</body> 
</html>