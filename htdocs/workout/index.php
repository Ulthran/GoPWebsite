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
        <link rel="stylesheet" src="../assets/workout.css">
    </head

    <body>
        <?php 
        if ($success) {
            require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-user-dropdown-body.html';
        } else {
            require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-login-signup-body.html';
        }    
        ?>

        <div class="overview">
            <p>Overview of goals, stages, safety</p>
        </div>

        <div class="filter">
            <p>Filters to apply to workouts; stage/season, lifting/running/plyo, etc</p>
        </div>

        <div class="wkout-list">
            <p>List of workout options</p>
        </div>

        <?php if ($success) {require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-user-dropdown-scripts.html';} ?>
      
    </body>
    
</html>


