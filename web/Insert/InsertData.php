<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['submit'])){
	//include the code contained in a php file withim another php file
	include("connection.php");
	
	$fnam=$_POST['fname'];
	$age=$_POST['age'];
	$add=$_POST['address'];
	$eml=$_POST['email'];
	
	$sql = "INSERT INTO employee "."(fname,age,address,email) "."VALUES('$fnam','$age','$add','$eml')";
	
	$results = mysqli_query($conn, $sql);
	
	if(!$results){
		die('Could not enter data: '.mysqli_error($conn));
		}
		else
		{echo "Entered data succsessfully\n";
		}
	}
?>
</body>
</html>