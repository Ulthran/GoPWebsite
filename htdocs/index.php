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
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/home.css">
  </head>

  <body>
    <?php 
        if ($success) {
            require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-user-dropdown-body.html';
        } else {
            require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-login-signup-body.html';
        }    
    ?>
    
    <div>
      <p>This. Is. Content.</p>
      <a href="http://ctbus.epizy.com/">About the creator</a><br/>
      <?php
        if (defined("CRYPT_BLOWFISH") && CRYPT_BLOWFISH) {
          echo "CRYPT_BLOWFISH is enabled!";
        }else {
          echo "CRYPT_BLOWFISH is not available";
        }
      ?>
    </div>

    <?php if ($success) {require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-user-dropdown-scripts.html';} ?>

  </body>
</html>

