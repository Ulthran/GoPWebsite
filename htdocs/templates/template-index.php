<!--Template index.php file
Intended to be copied to start any new page on the site
Note that you have to change the link to the new page's .css file-->

<html>
    
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/functions.php'; ?>

    <head>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-user-dropdown-head.html'; ?>
        <link rel="stylesheet" href="../assets/CHANGE_THIS.css">
    </head

    <body>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-user-dropdown-body.html'; ?>

        <div class="vid-list">
            <p>First video: </p>
            <?php
            $conn = connect_db();

            $query = "SELECT * FROM film";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($result)) {
                echo "<p>Video Name: " . ($row['VideoName']) . "</p>";
            }

            mysqli_close($conn);
            ?>
        </div>

        <?php require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-user-dropdown-scripts.html'; ?>
      
    </body>
    
</html>

