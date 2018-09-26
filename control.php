
<?php

 
/* realizamos la conexión con nuestra base de datos en MySQL */ 
$link = mysql_connect("","",""); 
mysql_select_db("", $link); 

/* El query valida si el usuario ingresado existe en la base de datos. Se utiliza la función htmlentities para evitar inyecciones SQL. */ 
$myusuario = mysql_query("select usuario, nombres, apellidos, area from categorias_intra where usuario = '".htmlentities($_POST["usr"])."'",$link); 
$nmyusuario = mysql_num_rows($myusuario); 

while($row = mysql_fetch_array($myusuario)) {
echo(" 

      

      ");

$usuario = $_POST["usr"]; 
$fecha = time();
$fecha2 = date("d/m/Y",$fecha);

date_default_timezone_set("America/El_Salvador");
$hora = date('H:i:s'); 

$insert="INSERT INTO control_categorias_intra (usuario, nombres, apellidos, area, fecha, hora)VALUES('$usuario','$row[1]','$row[2]','$row[3]','$fecha2','$hora')";
$result= mysql_query($insert, $link);

}
mysql_free_result($myusuario);




//Si existe el usuario, validamos también la contraseña ingresada y el estado del usuario... 
if($nmyusuario != 0)
{ 
$sql = "select usuario from categorias_intra where reg = 1 and usuario = '".htmlentities($_POST["usr"])."'"; 
  
  $myclave = mysql_query($sql,$link); 

  $nmyclave = mysql_num_rows($myclave); 
  //Si el usuario y clave ingresado son correctos (y el usuario está activo en la BD), creamos la sesión del mismo. 
  if($nmyclave != 0)
  { 
      session_start(); 
      //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario 
      $_SESSION["autentica"] = "SI"; 
      $_SESSION["usuarioactual"] = mysql_result($myclave,0,0); 
      
      //nombre del usuario logueado. 
      //Direccionamos a nuestra página principal del sistema. 



      header ("Location: aafc9c4cc91cc10591a2167ca47d24b1_mis_modulos.php"); 
   }
   else{ 

      echo"<script> window.location.href=\"modulos.php?usuario=$usuario\"</script>"; 
   } 
}
else
{ 
    echo"<script>alert('Lo siento pero no puedo darte acceso...'); window.location.href=\"index.html\"</script>"; 

} 
mysql_close($link); ?>


<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.0/sweetalert.min.css'>

<script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular.min.js'></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.0/sweetalert.min.js'></script>

  
    <script  src="sweetalert-example/js/index.js"></script>