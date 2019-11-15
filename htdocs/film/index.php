<?php require $_SERVER['DOCUMENT_ROOT'] . "/assets/session_manager.php"; ?>

<html>

    <head>
        <?php 
        if ($success) {
            require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-user-dropdown-head.html';
        } else {
            require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-login-signup-head.html';
        }    
        ?>
        <link rel="stylesheet" href="../assets/film.css">
    </head

    <body>
        <?php 
        if ($success) {
            require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-user-dropdown-body.html';
        } else {
            require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-login-signup-body.html';
        }    
        ?>

        <div class="filter">
            <p>Filtering options for films</p>
        </div>

        <div class="vid-list">
            <p>Video List</p>
            <?php
            $conn = connect_db();

            $query = "SELECT * FROM film";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($result)) {
                echo "<a href='http://goppyworky.2kool4u.net/film/view?id=" . ($row['RandID']) . "'>Video Name: " . ($row['VideoName']) . "</a></br>";
            }

            mysqli_close($conn);
            ?>
        </div>

        <?php if ($success) {require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-user-dropdown-scripts.html';} ?>
      
    </body>
    
</html>


