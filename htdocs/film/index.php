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
            require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-user-dropdown-body.php';
        } else {
            require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-login-signup-body.php';
        }    
        ?>

        <div class="filter">
            <p>Filtering options for films</p>
        </div>

        <div class="vid-list">
            <?php
            $conn = connect_db();

            $query = "SELECT * FROM film";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($result)) {
                if ($_SESSION['AccountType'] == "GoPper" || $row['Private'] == 0) {
                    $src = 'https://www.youtube.com/embed/' . ($row['VideoLink']);
                    // Well this sure turned into a mess
                    // TO-DO: Make the iframe not play but actually act as a link to the viewing page
                    echo "<div class='vid'><a href='http://goppyworky.2kool4u.net/film/view?id=" . ($row['RandID']) . "'><iframe width='180' height='160' src='" . $src . "' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture'></iframe></a><br/><a href='http://goppyworky.2kool4u.net/film/view?id=" . ($row['RandID']) . "'>" . ($row['VideoName']) . "</a></div>";
                }
            }

            mysqli_close($conn);
            ?>
        </div>

        <?php if ($success) {require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-user-dropdown-scripts.html';} ?>
      
    </body>
    
</html>


