<!--View index.php file
Used for viewing film along side scrolling notes-->

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
        <link rel="stylesheet" href="../../assets/view.css">
    </head

    <body>
        <?php 
        if ($success) {
            require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-user-dropdown-body.html';
        } else {
            require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-login-signup-body.html';
        }    
        ?>

        <div class="container">
            <?php
            $conn = connect_db();
            ?>

            <div class="title">
                <?php
                $query = "SELECT VideoName, Tournament, Year FROM film WHERE RandID = " . ($_GET['id']);
                # NOTE: Add check to make sure user has access to this video
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<h1>" . ($row['VideoName']) . "</h1>";
                    echo "<h2>" . ($row['Tournament']) . ", " . ($row['Year']) . "</h2>";
                }
                ?>
            </div>

            <div class="video">
                <?php
                $query = "SELECT VideoLink FROM film WHERE RandID = " . ($_GET['id']);
                # NOTE: Add check to make sure user has access to this video
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result)) {
                    $src = 'https://www.youtube.com/embed/' . ($row['VideoLink']);
                }

                echo '<iframe width="1100" height="450" src="' . $src . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                ?>

                <!--<iframe width="1100" height="350" src="https://www.youtube.com/embed/t9vSEpDuCcI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
            </div>

            <div class="notes">
                <?php
                $query = "SELECT Notes FROM film WHERE RandID = " . ($_GET['id']);
                # NOTE: Add check to make sure user has access to this video
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result)) {
                    echo ($row['Notes']);
                }
                ?>
            </div>
            
        </div>

        <?php mysqli_close($conn); ?>

        <?php if ($success) {require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-user-dropdown-scripts.html';} ?>
      
    </body>
    
</html>

