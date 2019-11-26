<?php require $_SERVER['DOCUMENT_ROOT'] . "/assets/session_manager.php"; ?>

<?php if ($success) { header('Location: http://goppyworky.2kool4u.net/'); } ?>

<html>
  <head>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-login-signup-head.html'; ?>
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/login.css">
  </head>

  <body>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-login-signup-body.php'; ?>

<body>

    <h1>Member Login</h1>
     
    <p>Thanks for visiting! Please either login below, or <a href="http://goppyworky.2kool4u.net/register/">click here to register</a>.</p>
     
    <form method="post" action="index.php" name="loginform" id="loginform">
    <fieldset>
        <label for="username">Username:</label><input type="text" name="username" id="username" /><br />
        <label for="password">Password:</label><input type="password" name="password" id="password" /><br />
        <input type="submit" name="login" id="login" value="Login" />
    </fieldset>
    </form>

    <?php 
    if ($error_code == 1) {
        echo "<p>Password doesn't match.</p>";
    } elseif ($error_code == 2) {
        echo "<p>Can't find your account.</p>";
    } elseif ($error_code == 4) {
        echo "<p>Looks like you've maxed out your incorrect login attempts for the day. If you think this is a mistake, you should contact the site administrator (ctbushman@gmail.com) so we can make sure this isn't an indication of malicious activity.</p>";
    }
     ?>

</body>

