
<?php      

        require_once('libraries/PHPMailer.php');
        
        define("EMAIL_USE_SMTP", true);
        define("EMAIL_SMTP_HOST", "ssl://smtp.gmail.com");
        define("EMAIL_SMTP_AUTH", true);
        define("EMAIL_SMTP_USERNAME", "@gmail.com");
        define("EMAIL_SMTP_PASSWORD", "password");
        define("EMAIL_SMTP_PORT", 465);
        define("EMAIL_SMTP_ENCRYPTION", "ssl");

        define("EMAIL_VERIFICATION_URL", "BAASLK");
        define("EMAIL_VERIFICATION_FROM", "baaslkinfo@gmail.com");
        define("EMAIL_VERIFICATION_FROM_NAME", "baas.lk");
        define("EMAIL_VERIFICATION_SUBJECT", "Account activation for baas.lk");
        define("EMAIL_VERIFICATION_CONTENT", "Please click on this link to activate your account:");

        $user_email="nisalnadeera@gmail.com";

        $mail = new PHPMailer;

        // please look into the config/config.php for much more info on how to use this!
        // use SMTP or use mail()
        if (EMAIL_USE_SMTP) {
            // Set mailer to use SMTP
            $mail->IsSMTP();
         
            $mail->SMTPAuth = EMAIL_SMTP_AUTH;
            // Enable encryption, usually SSL/TLS
            if (defined(EMAIL_SMTP_ENCRYPTION)) {
                $mail->SMTPSecure = EMAIL_SMTP_ENCRYPTION;
            }
            // Specify host server
            $mail->Host = EMAIL_SMTP_HOST;
            $mail->Username = EMAIL_SMTP_USERNAME;
            $mail->Password = EMAIL_SMTP_PASSWORD;
            $mail->Port = EMAIL_SMTP_PORT;
        } else {
            $mail->IsMail();
        }

        $mail->From = EMAIL_VERIFICATION_FROM;
        $mail->FromName = EMAIL_VERIFICATION_FROM_NAME;
        $mail->AddAddress($user_email);
        $mail->Subject = EMAIL_VERIFICATION_SUBJECT;

        $link = EMAIL_VERIFICATION_URL;

        $mail->Body = EMAIL_VERIFICATION_CONTENT.' '.$link;

        if(!$mail->Send()) {
            echo $mail->ErrorInfo;
        
        } else {
            echo "send";
        
        }

?>        