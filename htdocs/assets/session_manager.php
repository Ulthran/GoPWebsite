<?php
# Included for managing user account session variables
session_start();

require $_SERVER['DOCUMENT_ROOT'] . "/assets/functions.php";

$conn = connect_db();
$success = false;
//ERROR_CODE:
// 0 : Success
// 1 : Wrong password
// 2 : Account not found
// 3 : Not trying to log in or register
$error_code = 0;

?>

<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
    $success = true;
}
elseif(!empty($_POST['username']) && !empty($_POST['password']))
{
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    $query = "SELECT * FROM users WHERE Username = '".$username."'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        while($row = mysqli_fetch_assoc($result)) {
            $email = $row['Email'];
            $hash = $row['Password'];
            $account_type = $row['AccountType'];
        }
        
        if (password_verify($password, $hash)) {
            $_SESSION['Username'] = $username;
            $_SESSION['EmailAddress'] = $email;
            $_SESSION['LoggedIn'] = 1;
            $_SESSION['AccountType'] = $account_type;
         
            echo "<meta http-equiv='refresh' content='=2;index.php' />";
            $success = true;
        } else {
            $error_code = 1;
        }
    }
    else
    {
        $error_code = 2;
    }

}
else
{
    //header('Location: http://goppyworky.2kool4u.net/login/'); //Force users to have accounts
    // Right now, if you don't have an account, you can still access almost everything
    $error_code = 3;
}

mysqli_close($conn);
?>