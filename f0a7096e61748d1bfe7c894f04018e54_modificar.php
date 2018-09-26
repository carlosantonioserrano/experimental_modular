<?php

$usuario=$_REQUEST['usuario'];

?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Menu</title>
  
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="css/style-widget.css">


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
  font-size: 35px;
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
        
        <link rel="stylesheet" href="css/pushy.css">


<link rel='stylesheet prefetch' href='alert/css/sweetalert2.min.css'>

</head>
<link rel="stylesheet" type="text/css" href="css/main.css">
<body>
 <div id="contenedor_carga">
      <div id="carga"></div>
    </div>


        <nav class="pushy pushy-left" data-focus="#first-link">
            <div class="pushy-content">
                <ul>
                    <li class="pushy-submenu">
                        <button id="first-link"><img src="images/tools.png">Configuracion</button>
                        <ul>
                            <li class="pushy-link"><a href="salir.php"><img src="images/exit.png">Salir</a></li>
                            <li class="pushy-link"><a href="delet_modulos.php?usuario=<?php echo "$usuario";?>"><img src="images/recycle.png">Reiniciar</a></li>
                            <li class="pushy-link"><a href="f0a7096e61748d1bfe7c894f04018e54_modificar.php?usuario=<?php echo "$usuario";?>"><img src="images/edit.png">Modificar</a></li>
                        </ul>
                    </li>
                    <li class="pushy-submenu">
                        <button><img src="images/edituser.png">Perfil</button>
                        <ul>
                            <li class="pushy-link"><a href="perfil.php"><img src="images/edituser.png">Editar Perfil</a></li>
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
                    <li class="pushy-link"><a href="#">Item 3</a></li>-->
                   
                </ul>
                <li class="pushy-link"><a href="aafc9c4cc91cc10591a2167ca47d24b1_mis_modulos.php"><img src="images/ojo.png">Mis Módulos</a></li>
            </div>
        </nav>

          <div class="site-overlay"></div>

        
        <div id="container">
          
            <button class="menu-btn">&#9776;</button>


  <div class="middle">
    
  <font face="Arial" size="4" color="#FFFFFF"><?php echo $usuario?>: <br>Puedes Modificar tus Módulos</font>
  <br>
  <label>
    <br>

    <?php
include("conexion.php");
$link=conecta();

$sql="SELECT cat1, cat2, cat3, cat4, cat5, cat6, usuario, reg FROM categorias_intra WHERE usuario = '$usuario'";
$result=mysql_query($sql,$link);
    ?>


    <form action="enviar_modulos.php" name="form" method="post">

<?php

while($row = mysql_fetch_array($result)) {

  $cat1= $row[0];
  $cat2= $row[1];
  $cat3= $row[2];
  $cat4= $row[3];
  $cat5= $row[4];
  $cat6= $row[5];
  $reg = $row[6];

  
}
?>


<?php
if($cat1 == "Venta"){

echo"
 <label>
<input type='checkbox' name='Venta' value='Venta' checked/>
<div class='back-end box'>
 <span>Venta</span>
  </div>
</label>

";
}else{

echo" 

<label>
  <input type='checkbox' name='Venta' value='Venta'/>
   <div class='back-end box'>
    <span>Venta</span>
  </div>
</label>
";

}




if($cat2 == "postVenta"){

echo" 

  <label>
  <input type='checkbox' name='postVenta' value='postVenta' checked/>
  <div class='back-end box'>
  <span>Post Venta</span>
  </div>
</label>

";
}else{

echo" 

<label>
  <input type='checkbox' name='postVenta' value='postVenta'/>
  <div class='back-end box'>
    <span>Post Venta</span>
  </div>
</label>
";

}



if($cat3 == "Herramientas"){

echo" 

<label>
  <input type='checkbox' name='Herramientas' value='Herramientas' checked/>
  <div class='back-end box'>
    <span>Herramientas</span>
  </div>
</label>
";
}else{

echo" 

<label>
  <input type='checkbox' name='Herramientas' value='Herramientas'/>
  <div class='back-end box'>
    <span>Herramientas</span>
  </div>
</label>
";

}


if($cat4 == "Caja"){

echo"

<label>
  <input type='checkbox' name='Caja' value='Caja' checked/>
  <div class='back-end box'>
    <span>Caja</span>
  </div>
</label>

";
}else{

echo"

<label>
  <input type='checkbox' name='Caja' value='Caja'/>
  <div class='back-end box'>
    <span>Caja</span>
  </div>
</label>

";

}


if($cat5 == "Internos"){

echo"

<label>
  <input type='checkbox' name='Internos' value='Internos' checked/>
  <div class='back-end box'>
    <span>Internos</span>
  </div>
</label>
";
}else{

echo"

<label>
  <input type='checkbox' name='Internos' value='Internos'/>
  <div class='back-end box'>
    <span>Internos</span>
  </div>
</label>
";

}


/*if($cat6 == "fullstack"){

echo"

<label>
  <input type='checkbox' name='fullstack' value='fullstack' checked/>
  <div class='back-end box2'>
    <span>FULLSTACK</span>
  </div>
</label>
";
}else{

echo"

<label>
  <input type='checkbox' name='fullstack' value='fullstack'/>
  <div class='back-end box2'>
    <span>FULLSTACK</span>
  </div>
</label>
";

}*/

?>

<!--<label>
  <input type='checkbox' name='eyn'/>
  <div class='back-end box'>
    <span>Oferta E&N</span>
  </div>
</label>


<label>
  <input type='checkbox' name='radio'/>
  <div class='back-end box'>
    <span>Paquetes</span>
  </div>
</label>


<label>
  <input type='checkbox' name='radio'/>
  <div class='back-end box'>
    <span>Promociones</span>
  </div>
</label>


<label>
  <input type='checkbox' name='radio'/>
  <div class='back-end box'>
    <span>Oferta E&N</span>
  </div>
</label>-->

<br><br><br><br>

<a href="enviar_modulos.php" class="btn" onclick="document.form.submit();return false">Continuar</a>

<a href="salir.php" class="btn" onclick="document.nombreFormulario.submit();return false">Salir</a>

<!--<center><H1><font face="Arial" color="#FFFFFF"><a href="#">CONTINUAR</H1></a><center>-->
   <input type="hidden" name="usuario" value="<?php echo $usuario?>">
</form>

  <script src='alert/js/jquery.min.js'></script>

<script src='alert/js/sweetalert2.min.js'></script>



    <script  src="alert/js/index.js"></script>


</div>

 
    
  <script type="text/javascript">
    window.onload= function(){
      var contendor = document.getElementById('contenedor_carga');
      contendor.style.visibility='hidden';
      
    }
  </script>

  <!-- Pushy JS -->
        <script src="js/pushy.min.js"></script>

</body>

</html>
