<head>
    <title>Selecting MySQL Database</title>
</head>
<body>
    
<?php 
    // Database connection credentials
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'department';
    
    // Open a connection to MySQL server
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    // Check the connection
    if (!$conn) {
        die('Could not connect: ' . mysqli_connect_error());
    }
    echo 'Connected successfully';
    echo '<br>'; 



    if (!$conn) {
        echo 'Select Database First';
    } else {
        echo 'Database is selected';
    }
    
?>
</body>
</html>
