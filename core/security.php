<?php
/*$tipo = mysql_query("SELECT level FROM tecnicos WHERE username = '$login_session'");
$level = $tipo["level"];*/

$few =  mysql_fetch_assoc(mysql_query('SELECT `level` FROM `tecnicos` WHERE `username` = \''.$login_session.'\''));

?>