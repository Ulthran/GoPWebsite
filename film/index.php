<html>
    
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/functions.php'; ?>

    <head>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-user-dropdown-head.html'; ?>
        <link rel="stylesheet" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/workout.css">
    </head

    <body>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-user-dropdown-body.html'; ?>

        <div class="filter">
            <p>Filtering options for films</p>
        </div>

        <div class="vid-list">
            <p>First video: </p>
            <?php
            $servername = "sql303.epizy.com";
            $database = "epiz_24783286_ctbus_gop";
            $username = "epiz_24783286";
            $password = "Pv4KJLgmURsD";

            // Create connection

            $conn = mysqli_connect($servername, $username, $password, $database);

            // Check connection

            if ($conn->connect_error || $conn == 0) {
                die("Connection failed: " . $conn->connect_error);
            }

            $query = "SELECT * FROM film";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($result)) {
                echo "<p>Video Name: " . ($row['VideoName']) . "</p>";
            }

            mysqli_close($conn);
            ?>
        </div>
      
    </body>
    
</html>

