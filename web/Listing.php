<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?Php
include 'connection.php';	
	$sql=	"SELECT * FROM employee";	
	$result = mysqli_query($conn,$sql);
echo "<table border='1'>
<tr>
<th>Employee Id</th>
<th>Employee name</th>
<th>Employee Age</th>
<th>Address</th>
</tr>";
//fetches a result row as an  array .
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
 echo "<td>" . $row['emp_id'] . "</td>";
 echo "<td>" . $row['fname'] . "</td>";
 echo "<td>" . $row['age'] . "</td>";
 echo "<td>" . $row['address'] . "</td>";
  echo "</tr>";
  }//end of while
  
  
echo "</table>";

?>
</body>
</html>