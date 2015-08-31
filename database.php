<?php 

    // Connect to MySQL (localhost, database username, database password, database name)
    $con = mysqli_connect("localhost", "root", "", "basement");

    // Checking if the connection was successful
    if (mysqli_connect_errno()) {
        echo "Failed to connect: ".mysqli_connect_errno();
    }

?>