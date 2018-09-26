<?php

 // Recibimos la ID del vinculo desde la URL

 $id = $_REQUEST['id'];

echo $id;	

 // Nos conectamos con la base de datos

 mysql_connect("", "", "") or die(mysql_error());

 mysql_select_db("wordpress") or die(mysql_error());

 // Incrementamos en 1 el contador del link con la ID especificada en la url

 $update = "UPDATE contador_clicks SET clicks=(clicks + 1) WHERE id='$id'";

 mysql_query($update) or die (mysql_error());

 // Buscamos el vinculo con la ID especificada y redirigimos el navegador

 $data = mysql_query("SELECT url FROM contador_clicks WHERE id='$id'") or die(mysql_error());

 $info = mysql_fetch_array($data);

 header("Location:" .$info['url']);

?>
