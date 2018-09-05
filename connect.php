<?php
$db_host= "localhost";
$db_username= "egraminc_dbadmin";
$db_password= "admin#1234";
$database="egraminc_municipal";
$db_con=@mysql_connect($db_host,$db_username,$db_password) or die("can't connect" );
@mysql_select_db($database)or die("Can't find database");
$server="localhost";
$user="egraminc_dbadmin";
?>