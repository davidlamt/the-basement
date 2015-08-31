<?php 

    include "database.php";

    if (isset($_POST['name']) && isset($_POST['message'])) {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $message = mysqli_real_escape_string($con, $_POST['message']);
        $date = mysqli_real_escape_string($con, $_POST['date']);
    }

    // Setting the timezone
    date_default_timezone_set("America/Los_Angeles");
    $date = date("h:i:s a", time());

    $query = "INSERT INTO messages (name, message, date)
        VALUES ('$name', '$message', '$date')";

    if (!mysqli_query($con, $query)) {
        echo "Error: ".mysqli_error($con);
    } else {
        echo "<li>".$name." (".$date.")".": ".$message."</li>";
    }

?>