<!--View index.php file
Used for viewing workouts along with notes-->

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

        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
        <script src="../../BeefUp/dist/js/jquery.min.js"></script>
        <!--I include this new version of jsquery and all the sudden my old accordion function works, no beefup :(-->
	    <script src="../../BeefUp/dist/js/jquery.beefup.min.js"></script>
        <link rel="stylesheet" href="../../BeefUp/dist/css/jquery.beefup.css">
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
                $query = "SELECT * FROM workouts WHERE IndexCol = " . ($_GET['id']);
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<h1>" . ($row['Name']) . "</h1>";
                }
                ?>
            </div>

<!--
            <div class="video">
                <?php
                $query = "SELECT Link FROM film WHERE RandID = " . ($_GET['id']);
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result)) {
                    $src = 'https://www.youtube.com/embed/' . ($row['VideoLink']);
                }

                echo '<iframe width="1100" height="450" src="' . $src . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                ?>

            </div>
-->
            <div class="notes">
                <?php
                $query = "SELECT * FROM workouts WHERE IndexCol = " . ($_GET['id']);
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<p>" . ($row['Description']) . "<br/><br/>Estimated Time: " . ($row['EstimatedTime']) . "</p>";
                    echo "<p>" . ($row['Plan']) . "</p>";
                }
                ?>
            </div>           

            <?php
            $query = "SELECT * FROM ex_wk_junction WHERE WkIndex = " . ($_GET['id']);
            $result = mysqli_query($conn, $query);
            $count = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $ex_id = $row['ExIndex'];
                // Unfortunately this is only showing the first result, so we're just gonna copy the stuff we need in here directly
                // Oh it's cause we were overwriting the $row var in the included bit, not really worth the effort of preventing
                // It's a small enough chunk of code that I'm ok not DRYing it up, too many problems
                // It was getting pretty messy anyways
                //include "../exercise_view/index.php";
                ?>
                
                <div class="title-container">
                    <?php
                    $query = "SELECT * FROM exercises WHERE IndexCol = ".$ex_id;
                    $result2 = mysqli_query($conn, $query);
                    while($row2 = mysqli_fetch_assoc($result2)) {
                        echo "<h1 class='title".$count."'>" . ($row2['Name']) . "  <img src='../../assets/dropdown-arrow-nobg.png' width='15' height='15' /></h1>";
                    }
                    ?>
                </div>
                
                <?php
                echo "<div class='compressible-exercise".$count."'>";
                ?>

                <div class="video">
                    <?php
                    $result2 = mysqli_query($conn, $query);
                    while($row2 = mysqli_fetch_assoc($result2)) {
                        $src = 'https://www.youtube.com/embed/' . ($row2['Link']);
                    }

                    echo '<iframe width="1100" height="450" src="' . $src . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                    ?>

                </div>

                <div class="notes">
                    <?php
                    $result2 = mysqli_query($conn, $query);
                    while($row2 = mysqli_fetch_assoc($result2)) {
                        echo "<p>" . ($row2['Description']) . "</p>";
                    }
                    ?>
                </div>
                <?php
                echo "</div>";
                ?>

                <script>
                // Collapsible windows
                <?php
                echo "$('.title".$count."').click(function(){";
                echo "$('.compressible-exercise".$count."').slideToggle('slow');";
                ?>
                });
                </script>

                <?php
                $count = $count + 1;
            }
            ?>
            
        </div>

        

        <?php mysqli_close($conn); ?>

        <?php if ($success) {require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-user-dropdown-scripts.html';} ?>

        <!--Make the sliding accordion transitions a little smoother near the bottom, probably a nice footer would be better here-->
        <br/><br/><br/><br/><br/><br/><br/><br/>
    </body>
    
</html>

