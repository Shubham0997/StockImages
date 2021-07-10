<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
$servername="localhost";
$username="root";
$password="";
$db="demo";
$con=mysqli_connect($servername,$username,$password,$db);
if($con)
{
	echo"successful";
	}
else{
	echo"error";
	}
?>
</body>
</html>