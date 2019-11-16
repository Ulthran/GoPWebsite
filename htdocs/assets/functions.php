<?php

function connect_db() {
    $servername = "sql303.epizy.com";
    $database = "epiz_24783286_ctbus_gop";
    $username = "epiz_24783286";
    $password = "---------";

    // Create connection

    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection

    if ($conn->connect_error || $conn == 0) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

?>
