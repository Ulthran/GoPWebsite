<!--View index.php file
Used for viewing exercises along with notes-->

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

        $conn = connect_db();
        ?>

        <div class="container">

            <div class="title">
                <?php
                $id = mysqli_real_escape_string($conn, $_GET['id']);
                $query = "SELECT * FROM exercises WHERE IndexCol = " . $id;
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<h1>" . ($row['Name']) . "</h1>";
                }
                ?>
            </div>

            <div class="video">
                <?php
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result)) {
                    $src = 'https://www.youtube.com/embed/' . ($row['Link']);
                }

                echo '<iframe width="1100" height="450" src="' . $src . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                ?>

            </div>

            <div class="notes">
                <?php
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<p>" . ($row['Description']) . "</p>";
                }
                ?>
            </div>
            
        </div>

        <?php mysqli_close($conn); ?>

        <?php if ($success) {require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-user-dropdown-scripts.html';} ?>
      
    </body>
   
</html>

