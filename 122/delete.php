<?php
    include 'NewConnection.php';  // Include the database connection file

    // Check if the department ID is passed via the 'del' parameter
    if (isset($_GET['del'])) {
        $dept_id = $_GET['del'];  // Get the department ID from the URL query string
        
        // Sanitize the department ID to prevent SQL injection
        $dept_id = mysqli_real_escape_string($conn, $dept_id);
        
        $sql = "DELETE FROM department WHERE Did = '$dept_id'";

        if (mysqli_query($conn, $sql)) {
            header("Location: index.php");  
            exit();
        } else {
            echo "Error deleting department: " . mysqli_error($conn);
        }
    } else {
        exit();
    }

?>
