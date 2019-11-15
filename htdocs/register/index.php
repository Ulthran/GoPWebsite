<?php require $_SERVER['DOCUMENT_ROOT'] . "/assets/session_manager.php"; ?>

<?php if ($success) { header('Location: http://goppyworky.2kool4u.net/'); } ?>

<html>
  <head>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-login-signup-head.html'; ?>
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/register.css">
  </head>

  <body>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-login-signup-body.html'; ?>

<body>

<div class="main">
<?php
$conn = connect_db();

if(!empty($_POST['username']) && !empty($_POST['password']))
{
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = password_hash(mysqli_real_escape_string($conn, $_POST['password']), PASSWORD_DEFAULT);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
     
     $checkusername = mysqli_query($conn, "SELECT * FROM users WHERE Username = '".$username."'");
     $check2 = mysqli_query($conn, "SELECT * FROM unverified_users WHERE Username = '".$username."'");
      
     if(mysqli_num_rows($checkusername) >= 1 || mysqli_num_rows($check2) >= 1)
     {
        echo "<h1>Error</h1>";
        echo "<p>Sorry, that username is taken. Please go back and try again.</p>";
     }
     elseif (!(filter_var($email, FILTER_VALIDATE_EMAIL)))
     {
        echo "<h1>Error</h1>";
        echo "<p>Sorry, ".$email." is not valid. Please use a real email.</p>";
     }
     else
     {
        // Check for Carleton domain
        $parts = explode('@', $email);
        $domain = array_pop($parts);
        $account_type = "Other";
        if ($domain == "carleton.edu") {
            $account_type = "Carleton";
        }

        $registerquery = mysqli_query($conn, "INSERT INTO unverified_users (Username, Password, Email, AccountType) VALUES('".$username."', '".$password."', '".$email."', '".$account_type."')");
        if($registerquery)
        {
            echo "<h1>Success</h1>";
            echo "<p>An email has been sent to your account with a link to activate your account. Please <a href='http://goppyworky.2kool4u.net/login/'>click here to login</a> once you have activated your account.</p>";
        }
        else
        {
            echo "<h1>Error</h1>";
            echo "<p>Sorry, your registration failed.</p>";
            echo "<p>Please go back and try again.</p>";    
        }       
     }
}
else
{
    ?>
     
   <h1>Register</h1>
     
   <p>Please enter your details below to register.</p>
     
    <form method="post" action="index.php" name="registerform" id="registerform">
    <fieldset>
        <label for="username">Username:</label><input type="text" name="username" id="username" /><br />
        <label for="password">Password:</label><input type="password" name="password" id="password" /><br />
        <label for="email">Email Address:</label><input type="text" name="email" id="email" /><br />
        <input type="submit" name="register" id="register" value="Register" />
    </fieldset>
    </form>
     
    <?php
}

mysqli_close($conn);
?>
 
</div>

</body>

