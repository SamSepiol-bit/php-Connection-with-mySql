<?php
    include 'NewConnection.php';  // Include the database connection file

    // SQL query to fetch all departments from the department table
    $sql = "SELECT * FROM department";
        
    // Execute the query
    $result = mysqli_query($conn, $sql);
    
    echo "<table border='1' size='200'>
    <tr>
        <th>Department ID</th>
        <th>Department Name</th>
        <th>Remove</th>
    </tr>";

    // Fetch result row as an array and display each row in the table
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['Did'] . "</td>";  // Display Department ID
        echo "<td>" . $row['Dept_Name'] . "</td>";  // Display Department Name
        echo "<td><a href='delete.php?del=" . $row['Did'] . "' onClick='return confirm(\"Do you really want to delete this department?\");'>Delete</a></td>";
        echo "</tr>";
    }
    
    echo "</table>";


?>
