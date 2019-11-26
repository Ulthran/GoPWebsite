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

// Detects mobile version user
// @return is 1 for mobile, 0 otherwise
function is_mobile() {
    $useragent=$_SERVER['HTTP_USER_AGENT'];

    if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
        return 1;
    }

    return 0;
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
    $mail->Port = 587; // Which port to use, 587 is the default port for TLS security.
    $mail->SMTPSecure = 'TLS'; // Which security method to use. TLS is most secure. But it don't make biscuits.
    $mail->SMTPAuth = true; // Whether you need to login. This is almost always required.
    $mail->Username = "ctbushman@gmail.com"; // Your Gmail address.
    $mail->Password = $mail_password; // Your Gmail login password or App Specific Password.

    /*
     * Message Configuration
     */

    $mail->setFrom('admin@goppyworky.net', 'From the Gods Of Plastic'); // Set the sender of the message.
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