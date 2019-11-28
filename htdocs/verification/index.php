<?php require $_SERVER['DOCUMENT_ROOT'] . "/assets/session_manager.php"; ?>

<?php if ($success) { header('Location: http://goppyworky.2kool4u.net/'); } ?>

<html>
  <head>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-login-signup-head.html'; ?>
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/assets/verification.css">
  </head>

  <body>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/templates/header-login-signup-body.php'; ?>

<body>

<div class="main">
<?php
$conn = connect_db();

$id = mysqli_real_escape_string($conn, $_GET['id']);
$user = mysqli_real_escape_string($conn, $_GET['user']);

if(!empty($_POST['code']))
{
    $code = mysqli_real_escape_string($conn, $_POST['code']);
    $query = "SELECT * FROM unverified_users WHERE Username='".$user."' AND RandID='".$id."'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $realCode = $row['VerificationCode'];
        $password = $row['Password'];
        $email = $row['Email'];
        $accountType = $row['AccountType'];
    }

    if ($realCode == $code) {
        $query = "INSERT INTO users (Username, Password, Email, AccountType) VALUES ('".$user."', '".$password."', '".$email."', '".$accountType."')";
        if (mysqli_query($conn, $query)) {
            echo "<h1>Congratulations, ".$user."</h1>";
            echo "<p>Your account has now been verified. Be sure to <a href='http://goppyworky.2kool4u.net/login/'>login</a> so that you can use it.</p>";
        }
    } else {
        echo "<h1>Uh Oh</h1>";
        echo "<p>Looks like your verification code isn't right. Make sure that you're copied both the link and the verification code fully and without extra characters.</p>";
    }
}
else
{
    ?>
     
   <h1>Register</h1>
     
   <p>Please enter your details below to register.</p>
     
    <?php echo '<form method="post" action="index.php?user='.$user.'&id='.$id.'" name="verificationform" id="verificationform">';?>
    <fieldset>
        <label for="code">Verification Code:</label><input type="text" name="code" id="code" /><br />
        <input type="submit" name="verify" id="verify" value="Verify Account" />
    </fieldset>
    </form>
     
    <?php
}

mysqli_close($conn);
?>
 
</div>

</body>

</html>

