<?php
session_start();

if ($_SESSION['uid']) 
{
	echo $_SESSION['uid'];
}

else{
	echo "error";
	header('location:adminlogin.php');
}

?> 

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>welcome to admin dashboard man   cool </h1>
</body>
</html>