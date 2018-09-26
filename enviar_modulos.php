  <?php

include("conexion.php");
$link=conecta();


if (isset($_REQUEST['Venta'])) {
$Venta = $_REQUEST['Venta'];
} else {
$Venta = "";
}

if (isset($_REQUEST['postVenta'])) {
$postVenta = $_REQUEST['postVenta'];
} else {
$postVenta = "";
}

if (isset($_REQUEST['Herramientas'])) {
$Herramientas = $_REQUEST['Herramientas'];
} else {
$Herramientas = "";
}

if (isset($_REQUEST['Caja'])) {
$Caja = $_REQUEST['Caja'];
} else {
$Caja = "";
}

if (isset($_REQUEST['Internos'])) {
$Internos = $_REQUEST['Internos'];
} else {
$Internos = "";
}



if (isset($_REQUEST['usuario'])) {
$usuario = $_REQUEST['usuario'];
} else {
$usuario = "";
}


if (isset($_REQUEST['fullstack'])) {
$fullstack = $_REQUEST['fullstack'];
} else {
$fullstack = "";
}

//echo $usuario;

//$usuario="erickcillo";

$reg="1";


//$sql="INSERT INTO categorias_intra(cat1,cat2,cat3,cat4,cat5,usuario,reg)VALUES('$movistar','$pos','$pre','$paquetes','$promociones','$usuario','$reg')";

$sql= mysql_query("UPDATE categorias_intra SET cat1='$Venta', cat2='$postVenta', cat3='$Herramientas', cat4='$Caja', cat5='$Internos', reg='$reg' WHERE usuario = '$usuario'");


$myusuario = mysql_query("select usuario from categorias_intra where usuario = '".htmlentities($_POST["usuario"])."'",$link); 
$nmyusuario = mysql_num_rows($myusuario);
if($nmyusuario != 0)
{ 
$sql = "select usuario from categorias_intra where reg = 1 and usuario = '".htmlentities($_POST["usuario"])."'"; 
  
  $myclave = mysql_query($sql,$link); 

  $nmyclave = mysql_num_rows($myclave); 
if($nmyclave != 0)
  { 
      //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario 
session_start(); 
      //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario 
      $_SESSION["autentica"] = "SI"; 
      $_SESSION["usuarioactual"] = mysql_result($myclave,0,0); 
           

header( 'Location: aafc9c4cc91cc10591a2167ca47d24b1_mis_modulos.php' ) ;

 }
 }
//$result= mysql_query($sql, $link);
//echo $sql;

/*if($result){
    echo"
    <script>
      //alert('REGISTRO AGREGADO CON EXITO');
      window.location.href='seleccionados.php';
    </script>
    ";
  }else{
    echo"
    <script>
      //alert('REGISTRO NO SE PUDO AGREGAR CON EXITO');
    window.location.href='index.html';
    </script>
    ";

}*/



?>

