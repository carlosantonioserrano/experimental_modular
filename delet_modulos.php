
<?php 

$usuario=$_REQUEST['usuario'];


$movistar = "";
$pos = "";
$pre = "";
$paquetes = "";
$promociones = "";
$fullstack = "";





   // process form
   $link = mysql_connect("", "", "");
   mysql_select_db("",$link); 
   
  $sql= mysql_query("UPDATE categorias_intra SET cat1='$movistar', cat2='$pos', cat3='$pre', cat4='$paquetes', cat5='$promociones', cat6='$fullstack', reg='$reg' WHERE usuario = '$usuario'");


   header( 'Location: index.html' ) ;
?>
