<?php
//local
/*$host="localhost";
$user="root";
$pw="";
$dbname="disabled_db";*/

//server 
$host="localhost";
$user="bestshow_disabled";
$pw="12345678";
$dbname="bestshow_disabled";


$c=mysql_connect($host, $user, $pw);

	if(!$c){
		echo "Error ! Connection ";
		exit();
	}

	
	mysql_query("SET NAMES UTF8");
	mysql_query("SET character_set_results=utf8");
	mysql_query("SET character_set_client=utf8");
	mysql_query("SET character_set_connection=utf8");


?>
