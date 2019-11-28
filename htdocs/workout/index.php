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
        <link rel="stylesheet" href="../assets/workout.css">
    </head

    <body>
        <?php 
        if ($success) {
            require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-user-dropdown-body.php';
        } else {
            require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-login-signup-body.php';
        }    
        ?>

        <div class="overview">
            <p>Overview of goals, stages, safety</p>
        </div>

        <div class="filter">
            <p>Filters to apply to workouts; stage/season, lifting/running/plyo, etc</p>
        </div>

        <a href="http://goppyworky.2kool4u.net/exercise/" style="padding:20px;">View Exercises</a>

        <div class="wkout-list">
            <?php
            $conn = connect_db();
            
            $workout_query = mysqli_query($conn, "SELECT * FROM workouts");
            while ($row = mysqli_fetch_assoc($workout_query)) {
                echo "<div class='wkout'><a href='http://goppyworky.2kool4u.net/workout/view?id=".$row['IndexCol']."'>".$row['Name']."</a></div>";
            }
            ?>
        </div>

        <?php mysqli_close($conn); ?>

        <?php if ($success) {require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-user-dropdown-scripts.html';} ?>
      
    </body>
    
</html>


