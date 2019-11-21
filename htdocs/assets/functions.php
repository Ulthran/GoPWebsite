<?php

// Connects to db epiz_24783286_ctbus_gop and returns connection object
// @return is a mysqli link
function connect_db() {
    // Pull in passwords so that they don't get put up on GitHub
    require $_SERVER['DOCUMENT_ROOT'] . "/are_these_bananas.php";
    
    $servername = "sql303.epizy.com";
    $database = "epiz_24783286_ctbus_gop";
    $username = "epiz_24783286";
    $password = $gdb_password;

    // Create connection

    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection

    if ($conn->connect_error || $conn == 0) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

// Sends email via PHPMailer
// @param destination is the target email
// @param user is the username of the account being verified
// @return is 1 on success or the mailer error on failure
function send_email($destination, $user, $subject, $body) {
    // Pull in passwords so that they don't get put up on GitHub
    require $_SERVER['DOCUMENT_ROOT'] . "/are_these_bananas.php";
    
    date_default_timezone_set('Etc/UTC');

    // Edit this path if PHPMailer is in a different location.
    require '../PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;
    $mail->isSMTP();

    /*
     * Server Configuration
     */

    $mail->Host = 'smtp.gmail.com'; // Which SMTP server to use.
    $mail->Port = 465; // Which port to use, 587 is the default port for TLS security.
    // Don't follow the above advice about 587, gmail blocks that
    $mail->SMTPSecure = 'ssl'; // Which security method to use. TLS is most secure. But it don't make biscuits.
    $mail->SMTPAuth = true; // Whether you need to login. This is almost always required.
    $mail->Username = "ctbushman@gmail.com"; // Your Gmail address.
    $mail->Password = $mail_password; // Your Gmail login password or App Specific Password.

    /*
     * Message Configuration
     */

    $mail->setFrom('ctbushman@gmail.com', 'From the Gods Of Plastic'); // Set the sender of the message.
    $mail->addAddress($destination, $user); // Set the recipient of the message.
    $mail->Subject = $subject; // The subject of the message.

    /*
     * Message Content - Choose simple text or HTML email
     */
 
    // Choose to send either a simple text email...
    $mail->Body = $body; // Set a plain text body.

    // ... or send an email with HTML.
    //$mail->msgHTML(file_get_contents('contents.html'));
    // Optional when using HTML: Set an alternative plain text message for email clients who prefer that.
    //$mail->AltBody = 'This is a plain-text message body'; 

    //$mail->addAttachment('images/phpmailer_mini.png');

    if ($mail->send()) {
        return 1;
    } else {
        return $mail->ErrorInfo;
    }
}

?>