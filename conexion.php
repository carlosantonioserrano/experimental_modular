<?php
function conecta(){
$link=mysql_connect("","","");
mysql_select_db("",$link);
return $link;
}
?>