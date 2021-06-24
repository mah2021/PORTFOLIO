<?php

$host="localhost";
$db="profiledb";
$username="root";
$password="";
try{
	$connect=new PDO ("mysql:host=$host;dbname=$db",$username,$password);
	$connect->query("set character set utf8");
	
}
catch(PDOException $error){
	echo "Error In Connection".$error->getLine();
}

?>