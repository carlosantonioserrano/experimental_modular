  
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

if (isset($_REQUEST['movistartv'])) {
$movistartv = $_REQUEST['movistartv'];
} else {
$movistartv = "";
}


$usuario= $_SESSION["usuarioactual"];


//$usuario="erickcillo";
//$usuario="robmarv";

$reg="1";


$sql="SELECT cat1, cat2, cat3, cat4, cat5, cat6 usuario, reg FROM categorias_intra WHERE usuario = '$usuario'";
$result=mysql_query($sql,$link);

?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>JARVIS</title>
  
 <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">

<meta name="author" content="Robmarv Acevedo">


  
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

      <!--<link rel="stylesheet" href="css/style_seleccionados.css">-->

  </style>


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


<script type="text/javascript">

function texto_aleatorio(){ 
   var textos = new Array() 
   textos[0] = "El trabajo que nunca se empieza es el que tarda más en finalizarse..." 
   textos[1] = "El 80% del éxito se basa simplemente en insistir..." 
   textos[2] = "Tú no eres tu currículum, eres tu trabajo..." 
   textos[3] = "La motivación nos impulsa a comenzar y el hábito nos permite continuar..." 
   textos[4] = "Las oportunidades no son producto de la casualidad, mas bien son resultado del trabajo..." 

   aleat = Math.random() * (textos.length) 
   aleat = Math.floor(aleat) 

document.write(textos[aleat]) <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>
        
  
       <link rel="stylesheet" type="text/css" href="win8/css/metro.css" />
        <link rel="stylesheet" type="text/css" href="win8/css/metro_mobile.css" media="screen and (max-height: 500px), screen and (orientation:portrait)" />
        <link rel="stylesheet" type="text/css" href="win8/css/demo.css" />
        <script type="text/javascript" src="win8/javascript/jquery.js"></script>
        <script type="text/javascript" src="win8/javascript/metro.js"></script>
        <script type="text/javascript" src="win8/javascript/demo.js"></script>


          <style>
            #widget_scroll_container {
                width: 2160px;
            }
            div.widget_container {
                width: 1200px;
            }
            div.widget_container.half {
                width: 400px;
            }
            @media screen and (max-height: 680px) {
                #widget_scroll_container {
                    width: 1660px;
                }
                div.widget_container {
                    width: 900px;
                }
                div.widget_container.half {
                    width: 300px;
                }
            }
        </style>
 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

<link rel="stylesheet" href="clock2/css/style.css">

<script type="text/javascript">

function nuevo() 
{ 
window.location = ("contador2.php?id=4"); 
} 

function nuevo2() 
{ 
window.location = ("contador2.php?id=5"); 
} 

function nuevo3() 
{ 
window.location = ("contador2.php?id=7"); 
} 

function nuevo4() 
{ 
window.location = ("contador2.php?id=8"); 
} 

function nuevo5() 
{ 
window.location = ("contador2.php?id=6"); 
} 
</script>




<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.9/css/weather-icons.min.css">
<link rel="stylesheet" href="clima/css/style.css">



</head>

<body>
<div id="contenedor_carga">
      <div id="carga"></div>
    </div>

      
        <!-- Pushy Menu -->

        <nav class="pushy pushy-left" data-focus="#first-link">
            <div class="pushy-content">

                <ul>
                    <li class="pushy-submenu">
                        <button id="first-link"><img src='images/tools.png'>Configuracion+</button>
                        <ul>
                            <li class="pushy-link"><a href="salir.php"><img src='images/exit.png'><font face="Arial"> Salir</a></li>
                            <li class="pushy-link"><a href="delet_modulos.php?usuario=<?php echo "$usuario";?>"><img src='images/recycle.png'>Reiniciar</a></li>
                            <li class="pushy-link"><a href="f0a7096e61748d1bfe7c894f04018e54_modificar.php?usuario=<?php echo "$usuario";?>"><img src='images/edit.png'> Modificar</a></li>
                        </ul>
                    </li>

                    <li class="pushy-submenu">
                        <button><img src="images/edituser.png">Perfil+</button>
                        <ul>
                            <li class="pushy-link"><a href="perfil.php"><img src="images/edituser.png">Editar Perfil</a></li>
                             </li>
                             </ul>

                            <li class="pushy-link"><a href="buscador_goo/legend/index.html", target="_blank"><img src="buscador_goo/legend/img/search2.png"><font face="Arial">Buscador</font></a></li>
                            <!--<li class="pushy-link"><a href="#">Item 3</a></li>
                        
                   
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
                    <li class="pushy-link"><a href="#">Item 3</a></li>
                    <li class="pushy-link"><a href="#">Item 4</a></li>
                </ul>-->

            </div>

        </nav>

          <div class="site-overlay"></div>
          
<button class="menu-btn">&#9776;</button>
        <!-- Your Content -->

        <div id="container">
            <!-- Menu Button -->
            


  <div class="middle">

  
  
  <label>
  
    <form action="" method="get">

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
//mysql_free_result($sql);
//mysql_close($link); //Cierras la Conexión
?>

<link rel='stylesheet prefetch' href='modulos/css/font-awesome.min.css'>

<link rel="stylesheet" href="modulos/css/style.css">

<div id='widget_scroll_container'>

<div class='widget_container full' data-num='0'>
<?php

  
if($cat1 == "Venta"){

echo" 
                 <div class='widget widget4x2 widget_orange widget_link animation unloaded' data-theme='orange' data-name='github' onClick='nuevo();'>
                    <div class='widget_content'>
                        <div class='main' style='background-image:url(win8/images/venta.png);'>

                            <span>VENTA</span>

                        </div>
                    </div>
                </div>

";
}

if($cat2 == "postVenta"){

echo" 
   

   <div class='widget widget4x2 widget_red widget_link animation unloaded' data-theme='yellow' data-name='admin7' onClick='nuevo2();'>
                    <div class='widget_content'>
                    <div class='main' style='background-image:url(win8/images/posventa.png);'>
                            <span>POSTVENTA</span>
                        </div>
                    </div>
                </div>
";
}


echo "
 <div class='widget widget2x2 widget_blue animation unloaded' data-url='contact.php' data-theme='darkblue' style='background-color: rgb(30,97,114);' data-name='Contact' data-link='https://support.netcracker.com' target='_blank'>
                    <div class='widget_content'>
                        <div class='main' style='background-color: rgb(30,97,114);background-image:url(win8/images/alerta.png);'>
                            <span>Incidencias</span>
                        </div>
                    </div>
                </div>";


echo "
  <div class='widget widget2x2 widget_red animation unloaded' data-url='royal_preloader.php' style='background-color: rgb(30,97,114);' data-theme='red' data-name='Contact' data-link='http://216.184.111.133/formacionsv/paquetes/index.php' target='_blank'>
                    <div class='widget_content'>

                        <div class='main' style='background-color: rgb(30,97,114); background-image:url(win8/images/widget_royal_preloader.png);'>
                            <span>Paquetes</span>
                        </div>
                    </div>
                </div>";


if($cat5 == "Internos"){

echo"
<div class='widget widget4x2 widget_darkgreen animation unloaded' data-url='admin7.php' data-theme='darkgreen' data-name='admin7' onClick='nuevo5();'>
                    <div class='widget_content'>
                        <div class='main' style='background-image:url(win8/images/internos.png);'>
                            <span>INTERNOS</span>
                        </div>
                    </div>
                </div>
";
}


if($cat3 == "Herramientas"){
echo"
  <div class='widget widget2x2 widget_darkred animation unloaded' data-url='typography.php' data-theme='darkred' data-name='admin7' onClick='nuevo3();'>
                    <div class='widget_content'>
                        <div class='main' style='background-image:url(win8/images/herramientas.png);'>
                            <span>HERRAMIENTAS</span>
                        </div>
                    </div>
                </div>
";
}





if($cat4 == "Caja"){

echo"
                <div class='widget widget2x2 widget_purple animation unloaded' data-url='' data-theme='grey' data-name='' onClick='nuevo4();'>
                      <div class='widget_content'>
                        <div class='main' style='background-image:url(win8/images/caja.png);'>
                            <span>CAJA</span>
                        </div>
                    </div>
                  
                </div>
";
}


/*if($cat6 == "FullStack"){*/

echo"
                <div class='widget widget2x2 widget_blue animation unloaded' data-url='sliding_menu.php' style='background-color: rgb(30,97,114);' data-theme='blue' data-name='sliding_menu' data-link=''>
                    <div class='widget_content'>
                        
                        <div class='main' style='background-color: rgb(30,97,114);background-image:url(win8/images/full.png);'>

                            <span>FullStack</span>
                        </div>
                    </div>
                </div>
";
//}                
?>            
                <div class='widget widget2x2 widget_darkblue animation unloaded' data-url='timeline.php' style='background-color: rgb(30,97,114);' data-theme='darkblue' data-name='timeline' data-link=''>
                    <div class='widget_content'>
                      <div class='main' style='background-color: rgb(30,97,114);background-image:url(win8/images/widget_slider.png);'>                        
                            <span>Avi CAM</span>
                        </div>
                    </div>
                </div>

                <div class='widget widget2x2 widget_blue animation unloaded' data-url='sliding_menu.php' style='background-color: rgb(30,97,114);' data-theme='blue' data-name='sliding_menu' data-link=''>
                    <div class='widget_content'>
                        
                        <div class='main' style='background-color: rgb(30,97,114);background-image:url(win8/images/jarvis.png);'>

                            <span>Tutorial</span>
                        </div>
                    </div>
                </div>

                <div class='widget widget2x2 widget_blue animation unloaded' data-url='sliding_menu.php' style='background-color: rgb(30,97,114);' data-theme='blue' data-name='sliding_menu'>
                  <div class='widget_content'>                    
                        
                        <div class='main' style='background-color: rgb(30,97,114);background-image:url(win8/images/full.png);'>
                            
                            <span><script type="text/javascript"> var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"); var f=new Date(); document.write(diasSemana[f.getDay()] + "-" + f.getDate() + "-" + meses[f.getMonth()] + "-" + f.getFullYear()); </script></span>
                        
                        </div>
                    </div>
                </div>
                

                <div class='widget widget4x2 widget_darkblue animation unloaded' data-url='royal_tab.php' style='background-color: rgb(30,97,114);' data-theme='darkblue' data-name='royal_tab'>
                    <div class='widget_content'>
                         <div class='main' style='background-color: rgb(30,97,114);background-image:url(win8/images/widget_metro_gallery.png);'>
                            <span>Modulos</span>
                        </div>
                    </div>
                </div>
                <div class='widget widget2x2 widget_purple widget_link animation unloaded' data-url='' style='background-color:#33ABE0;' data-theme='purple' data-name='About' data-link=''>
                    <div class='widget_content'>
                        <div class='main' style='background-color: #33ABE0 ;background-image:url(win8/images/social/telegram.png);'>
                            <span>Telegram</span>
                        </div>
                    </div>
                </div>
                <div class='widget widget1x1 widget_ widget_link animation unloaded' style='background-color:#50535A;' data-url='' data-theme='Grey' data-name='Facebook' data-link=''>
                    <div class='widget_content'>
                        <div class='main' style='background-color:#50535A;background-image:url(win8/images/social/facebook.png);'>
                            <span>Larry</span>
                        </div>
                    </div>
                </div>
                <div class='widget widget1x1 widget_ widget_link animation unloaded' style='background-color:#50535A;' data-url='' data-theme='' data-name='Twitter' data-link=''>
                    <div class='widget_content'>
                        <div class='main' style='background-color:#50535A;background-image:url(win8/images/social/twitter_w.png);'>
                            <span>Eva</span>
                        </div>
                    </div>
                </div>
                   <div class='widget widget1x1 widget_ widget_link animation unloaded' style='background-color:#50535A;' data-url='' data-theme='' data-name='Facebook' data-link=''>
                    <div class='widget_content'>
                        <div class='main' style='background-color:#50535A;background-image:url(win8/images/social/codecanyon2.png);'>
                            <span>Wall-E</span>
                        </div>
                    </div>
                </div>
                 <div class='widget widget1x1 widget_ widget_link animation unloaded' style='background-color:#50535A;' data-url='' data-theme='' data-name='Twitter' data-link=''>
                    <div class='widget_content'>
                        <div class='main' style='background-color:#50535A;background-image:url(win8/images/social/tivi.png);'>
                            <span>TiVi</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class='widget_container half' data-num='1'>
                  
              <div class='widget widget2x2 widget_grey animation unloaded' data-url='blank.php' data-theme='grey' data-name='tile_00035'>
                    <div class='widget_content'>
                        <div class='main'>
                            <span></span>
                        </div>
                    </div>
                </div>


                   <div class='widget widget2x2 widget_grey animation unloaded' data-url='blank.php' data-theme='grey' data-name='tile_00035'>
                    <div class='widget_content'>
                        <div class='main'>
                            <span></span>
                        </div>
                    </div>
                </div>
                
                
                    
               <div class='widget widget2x2 widget_grey animation unloaded' data-url='blank.php' data-theme='grey' data-name='tile_00035'>
                    <div class='widget_content'>
                        <div class='main'>
                            <span></span>
                        </div>
                    </div>
                </div>

                  <div class='widget widget2x2 widget_grey animation unloaded' data-url='blank.php' data-theme='grey' data-name='tile_00035'>
                    <div class='widget_content'>
                        <div class='main'>
                            <span></span>
                        </div>
                    </div>
                </div>

                <div class='widget widget2x2 widget_grey animation unloaded' data-url='blank.php' data-theme='grey' data-name='tile_00035'>
                    <div class='widget_content'>
                        <div class='main'>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class='widget widget2x2 widget_grey animation unloaded' data-url='blank.php' data-theme='grey' data-name='tile_00036'>
                    <div class='widget_content'>
                        <div class='main'>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>



            <div class='widget_container half' data-num='2'>
                <div class='widget widget2x2 widget_grey animation unloaded' data-url='blank.php' data-theme='grey' data-name='tile_00023'>
                    <div class='widget_content'>
                        <div class='main'>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class='widget widget2x2 widget_grey animation unloaded' data-url='blank.php' data-theme='grey' data-name='tile_00023'>
                    <div class='widget_content'>
                        <div class='main'>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class='widget widget2x2 widget_grey animation unloaded' data-url='blank.php' data-theme='grey' data-name='tile_00024'>
                    <div class='widget_content'>
                        <div class='main'>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class='widget widget2x2 widget_grey animation unloaded' data-url='blank.php' data-theme='grey' data-name='tile_00025'>
                    <div class='widget_content'>
                        <div class='main'>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class='widget widget2x2 widget_grey animation unloaded' data-url='blank.php' data-theme='grey' data-name='tile_00026'>
                    <div class='widget_content'>
                        <div class='main'>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class='widget widget2x2 widget_grey animation unloaded' data-url='blank.php' data-theme='grey' data-name='tile_00027'>
                    <div class='widget_content'>
                        <div class='main'>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div id='widget_preview'>
            <div id='widget_sidebar'>
                <div>
                    <div class='cancel'><span>Close</span></div>
                    <div class='refresh'><span>Refresh</span></div>
                    <div class='download'><span>Download</span></div>
                    <div class='back'><span>Back</span></div>
                    <div class='next'><span>Next</span></div>
                </div>
            </div>
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



 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
  <script  src="clima/js/index.js"></script>



  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="clock2/js/index.js"></script>
        
        <!-- Pushy JS -->
        <script src="js/pushy.min.js"></script>

        <script>
            var Userback = window.Userback || {};

            (function(id) {
                if (document.getElementById(id)) {return;}
                var s = document.createElement('script');
                s.id = id;
                s.src = 'https://static.userback.io/widget/v1.js';
                document.getElementsByTagName('head')[0].appendChild(s);
            })('userback-sdk');

            Userback.access_token = '1|8|IjXmeq4nrQRoPlmr84Tm7x2dDZUdpW08fYuuoyRQpIef3AHcFB';
        </script>


</body>

</html>
  <script type="text/javascript">
    window.onload= function(){
      var contendor = document.getElementById('contenedor_carga');
      contendor.style.visibility='hidden';
      
    }
  </script>