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
    <!--  <link rel="stylesheet" href="css/style-widget.css">-->




  <style>
a:link, a:visited {
    background-color: #5BC500;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}




.btn {
  border: 1.2px dashed #FFFFFF;
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
<link rel='stylesheet prefetch' href='alert/css/sweetalert2.min.css'>

</head>
<link rel="stylesheet" type="text/css" href="css/main.css">
<body>
 <div id="contenedor_carga">
      <div id="carga"></div>
    </div>


  <div class="middle">
    <br><br>
 

  <font face="Arial" size="6" color="#FFFFFF"><?php echo $usuario?> ¿Qué Módulos prefieres?</font>
  <br><br><br>
  <form action="enviar_modulos.php" name="form" method="post">
  
  <label>
  <div class="checkbox">
    <form>
      <div>
        <input type="checkbox" id="check" name="drama" value="drama" />
        <label for="check">
          <span><!-- This span is needed to create the "checkbox" element --></span>Drama
        </label>
      </div>
    </form>
    </div>
  </label>
      
      <br><br><br><br>

  <label>
  <div class="checkbox">
    <form>
      <div>
        <input type="checkbox" id="cc ficcion" name="cc_ficcion" value="cc_ficcion" />
        <label for="check">
          <span><!-- This span is needed to create the "checkbox" element --></span>Ciencia Ficción
        </label>
      </div>
    </form>
    </div>
  </label>

  <br><br><br><br>

<label>
  <input type="checkbox" name="ciencia_ficcion" value="ciencia_ficcion"/>
  <div class="back-end box2">
  <span>Ciencia Ficción</span>
  </div>
</label>

<label>
  <input type="checkbox" name="accion" value="accion"/>
  <div class="back-end box2" >
  <span>Acción</span>
  </div>
</label>

<label>
  <input type="checkbox" name="guerra" value="guerra"/>
  <div class="back-end box2">
  <span>Guerra</span>
  </div>
</label>

<label>
  <input type="checkbox" name="romance" value="romance"/>
  <div class="back-end box2">
  <span>Romance</span>
  </div>
</label>

<label>
  <input type="checkbox" name="comedia" value="Comedia"/>
  <div class="back-end box2">
    <span>Comedia</span>
  </div>
</label>

<label>
  <input type="checkbox" name="aventura" value="aventura"/>
  <div class="back-end box2">
  <span>Aventura</span>
  </div>
</label>

<label>
  <input type="checkbox" name="suspenso" value="suspenso"/>
  <div class="back-end box2">   
  <span>Suspenso</span>
  </div>
</label>
 
<label>
  <input type="checkbox" name="horror" value="horror"/>
  <div class="back-end box2" >
  <span>Horror</span>
  </div>
</label>

<label>
  <input type="checkbox" name="animacion" value="animacion"/>
  <div class="back-end box2">
  <span>Animación</span>
  </div>
</label>

<label>
  <input type="checkbox" name="fantasia" value="fantasia"/>
  <div class="back-end box2">
  <span>Fantasía</span>
  </div>
</label>

<label>
  <input type="checkbox" name="historia" value="historia"/>
  <div class="back-end box2">
  <span>Historia</span>
  </div>
</label>

<label>
  <input type="checkbox" name="crimen" value="crimen"/>
  <div class="back-end box2">
  <span>Crimen</span>
  </div>
</label>

<label>
  <input type="checkbox" name="artes_marciales" value="artes_marciales"/>
  <div class="back-end box2">
  <span>Artes marciales</span>
  </div>
</label>

<label>
  <input type="checkbox" name="misterio" value="Misterio"/>
  <div class="back-end box2">
  <span>Misterio</span>
  </div>
</label>

<label>
  <input type="checkbox" name="biografia" value="biografia"/>
  <div class="back-end box2">
  <span>Biografía</span>
  </div>
</label>

<label>
  <input type="checkbox" name="musical" value="musical"/>
  <div class="back-end box2">
  <span>Musical</span>
  </div>
</label>

<label>
  <input type="checkbox" name="deportiva" value="deportiva"/>
  <div class="back-end box2">
  <span>Deportiva</span>
  </div>
</label>

<label>
  <input type="checkbox" name="documentales" value="documentales"/>
  <div class="back-end box2">
  <span>Documentales</span>
  </div>
</label>

<label>
  <input type="checkbox" name="desastre" value="desastre"/>
  <div class="back-end box2">
  <span>Desastre</span>
  </div>
</label>

<label>
  <input type="checkbox" name="familiar" value="familiar"/>
  <div class="back-end box2">
  <span>Familiar</span>
  </div>
</label>

<label>
  <input type="checkbox" name="comedia_romantica" value="comedia_romantica"/>
  <div class="back-end box2">
  <span>Comedia Romántica</span>
  </div>
</label>

<label>
  <input type="checkbox" name="oeste" value="oeste"/>
  <div class="back-end box2">
  <span>Oeste</span>
  </div>
</label>

<label>
  <input type="checkbox" name="malas" value="malas"/>
  <div class="back-end box2">
  <span>Malas</span>
  </div>
</label>


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



</body>

</html>

