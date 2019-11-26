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
            require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-user-dropdown-body.php';
        } else {
            require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-login-signup-body.php';
        }    
        ?>

        <div class="container">
            <?php
            $conn = connect_db();
            ?>

            <div class="title">
                <?php
                $id = mysqli_real_escape_string($conn, $_GET['id']);
                $query = "SELECT VideoName, Tournament, Year, Private FROM film WHERE RandID = " . $id;
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result)) {
                    #Redirect if they got here by accident or some other way but don't have permissions
                    if ($row['Private'] == 1 && $_SESSION['AccountType'] != "GoPper") {
                        header("Location: http://goppyworky.2kool4u.net/");
                    }
                    echo "<h1>" . ($row['VideoName']) . "</h1>";
                    echo "<h2>" . ($row['Tournament']) . ", " . ($row['Year']) . "</h2>";
                }
                ?>
            </div>

            <div class="video">
                <?php
                $query = "SELECT VideoLink FROM film WHERE RandID = " . $id;
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result)) {
                    $src = 'https://www.youtube.com/embed/' . ($row['VideoLink']);
                }

                echo '<iframe width="1100" height="450" src="' . $src . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                ?>

            </div>

            <div class="notes">
                <?php
                $query = "SELECT Notes FROM film WHERE RandID = " . $id;
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

