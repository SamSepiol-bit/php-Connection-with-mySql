<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['submit'])){ 
	    include('connection.php');
				
		$search=$_POST['name'];
	
$sql = 'SELECT * FROM employee WHERE fname = "'.$search.'"';

  			$result = mysqli_query($conn,$sql) or die("Couldn't execute query. ". mysqli_error($conn));	
					
  		  if(mysqli_num_rows($result) > 0){ 
		  
	      $row = mysqli_fetch_array($result);
		  ?>
		          
         <form name="form" method="post" action="update.php">
		   <p>Employee email:
  <input type="text" name="email" 
		value="<?php echo $row['email']?>"/></p>
        	   <p>Employee age:
  <input type="text" name="age" 
		value="<?php echo $row['age']?>"/></p>
        <p>Employee Address:
  <input type="text" name="address" 
		value="<?php echo $row['address']?>"/></p>
		           
        <input type="hidden" name="name" value="<?php echo $search; ?>" />
			              
	         <input type="submit" name="update" id="update" value="Update" />
		   </p>
         </form>
        <?php
		 	
		
	 }
    else{
		 echo " No results found "; 
	    }
	
    
  }
	else{
		header("Location:Employeesearch.html");
	}
	?>  
</body>
</html>