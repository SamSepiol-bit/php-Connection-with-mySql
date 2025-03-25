<?php
    include 'NewConnection.php';  // Include the database connection file

    // SQL query to fetch the department ID and department name
    $sql = "SELECT Did, Dept_Name FROM department";  // Select from the department table
        
    $result = mysqli_query($conn, $sql);

    // Check if there are any results
    if(mysqli_num_rows($result) > 0){
        echo "<table border='1'>
            <tr>
                <th>Department ID</th>
                <th>Department Name</th>
            </tr>";

        // Loop through the result set and fetch each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['Did'] . "</td>";  // Display department ID
            echo "<td>" . $row['Dept_Name'] . "</td>";  // Display department name
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }

    // Close the database connection
    mysqli_close($conn);
?>
