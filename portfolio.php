<?php

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];

$conn = new mysqli('localhost','root','','portfolio');
if($conn->connect_error){
	die('connection failed :'.$conn->connect_error);
}else{ 
	$stmt = $conn->prepare("insert into feedback(Name,Email,Message) values(?,?,?)");
	$stmt->bind_param("ses",$Name, $Email, $Message);
	$stmt->execute();
	echo "response sent......";
	$stmt->close();
	$conn->close();
}
?>