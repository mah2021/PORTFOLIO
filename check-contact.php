<?php
include "funcs/connect2.php";
if(isset($_POST["btn"]))

{
	if(empty($_POST["name"])||empty($_POST["text"])){
		header("location:Contact.html?empty=1010");
exit;
	}
	else{
	$text=$_POST["text"];
	$title=$_POST["title"];
	$email=$_POST["email"];
	$name=$_POST["name"];
	
$sql="INSERT INTO `tbl_contacts` VALUES (NULL ,?,?,?,?);";
$result=$connect->prepare($sql);

$result->bindValue(1,$name);
$result->bindValue(2,$title);
	$result->bindValue(3,$email);
	$result->bindValue(4,$text);
$query=$result->execute();
if($query)
{
header("location:Contact.html?ok=1010");
exit;
}
else
{
header("location:Contact.html?no=1010");
	exit;
}
					
	}
}

else
{
	header("location:Contact.php");
	exit;
}


?>