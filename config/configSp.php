<?php



//confirmation mail
define("EMAIL_USE_SMTP", true);
define("EMAIL_SMTP_HOST", "ssl://smtp.gmail.com");
define("EMAIL_SMTP_AUTH", true);
define("EMAIL_SMTP_USERNAME", "gmailaddress");
define("EMAIL_SMTP_PASSWORD", "password");
define("EMAIL_SMTP_PORT", 465);
define("EMAIL_SMTP_ENCRYPTION", "ssl");



//Configuration for: verification email data

define("EMAIL_VERIFICATION_URL", "http://127.0.0.1/BAAS_LK/signupSP.php");
define("EMAIL_VERIFICATION_FROM", "baaslkinfo@gmail.com");
define("EMAIL_VERIFICATION_FROM_NAME", "baas.lk");
define("EMAIL_VERIFICATION_SUBJECT", "Account activation for baas.lk");
define("EMAIL_VERIFICATION_CONTENT", "Please click on this link to activate your account:");

define("HASH_COST_FACTOR", "10");
?>