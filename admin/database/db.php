<?php
$link	=	mysql_connect('localhost','root','');
if (!$link) {
    die('Not connected : ' . mysql_error());
}
$conn		=	mysql_select_db('comm_app',$link);
if (!$conn) {
    die ('Can\'t use foo : ' . mysql_error());
}
?>