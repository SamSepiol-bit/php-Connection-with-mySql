<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['update'])){ 
	    include('connection.php');
		
		    $name  =$_POST['name'];
		   $email  =$_POST['email']; 
	       $age  =$_POST['age'];
		   $address=$_POST['address']; 		

$sql="UPDATE employee SET email='$email',age='$age',address='$address' 
WHERE fname ='$name'";
		
  	 $result=mysqli_query($conn,$sql);
   
// if successfully updated. 
	if($result){			     
    
         // echo $row['emp_address'];
	echo "Hello ".$name ." your details is successfully updated";
	echo "<BR>";
	}
}
else {
echo "ERROR";
}
?>
</body>
</html>