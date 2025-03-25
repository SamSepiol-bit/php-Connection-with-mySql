<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'NewConnection.php';

        $result = mysqli_query($conn, "SELECT Dept_Name FROM department");
    ?>

    <form method="POST" action="">

    <select name="name">
        <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['Dept_Name'] . "'>" . $row['Dept_Name'] . "</option>";
            }
        ?>

        <input type="submit" name="submit" value="Search">
    </select>

    </form>
</body>
</html>