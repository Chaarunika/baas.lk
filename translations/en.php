<?php
echo "translation_english";
//login
define("DATABASE_ERROR","Database connection error");
define("LOGIN_FAILED", "Login failed");
define("USERNAME_OR_EMAIL", "Username or Email");
define("PASSWORD", "Password");
define("REMEMBER_ME", "Keep me logged in");
define("LOGIN", "Login");
define("REGISTER", "Register");
define("FORGOT_MY_PASSWORD", "I forgot my password");

//header


define("THEBESTWAY", "\"The best way to find a builder\"");
define("HOME", "Home");
define("WIKI", "Wiki");
define("FAQ", "FAQ");
define("FORUM", "FORUM");


//searchbar

//catagory

define("SUBMIT_SEARCH", "Search");
define("ORDER", "Order By Rating");
define("ALL", "ALL");
define("ARCHI_DESIGN", "Architect and Designer");
define("BUILDER", "Builder");
define("CONSULTANCYSERVICE", "Consultancy Service");
define("CONTRACTOR", "Contractor");
define("ELECTRICIAN", "Electrician");
define("MASON", "Mason");
define("MATERIAL", "Material Supplier");
define("REALESTATECOMPANY", "Real Estate Company");
define("TECHNICIAN", "Technician");
define("CARPENTER", "Carpenter");
define("HANDYMAN", "HandyMan");
define("PAINTER", "Painter");
define("PLUMBER", "Plumber");


//area

define("ANYAREA", "ANY AREA");
define("COLOMBO", "Colombo");
define("KANDY", "Kandy");
define("KURUNEGALA", "Kurunegala");
define("AMPARA", "Ampara");
define("ANURA", "Anuradhapura");
define("BADULLA", "Badulla");
define("BATTICALOA", "Batticaloa");
define("GALLE", "Galle");
define("GAMPAHA", "Gampaha");
define("HAMBANTOTA", "Hambantota");
define("JAFFNA", "Jaffna");
define("KALUTARA", "Kalutara");
define("KEGALLE", "Kegalle");
define("KILINOCHCHI", "Kilinochchi");
define("MANNAR", "Mannar");
define("MATALE", "Matale");
define("MATARA", "Matara");
define("MONERAGALA", "Moneragala");
define("MULLITIVU", "Mullaitivu");
define("NUWARAELIYA", "Nuwara Eliya");
define("POLONNARUWA", "Polonnaruwa");
define("PUTTALAMA", "Puttalam");
define("RATNAPURA", "Ratnapura");
define("TRINCOMALEE", "Trincomalee");
define("VAVUNIYA", "Vavuniya");


//define("", "");







/*
define("PASSWORD_WRONG", "Password is wrong");
define("ACCOUNT_NOT_ACTIVATED", "Your account is not activated yet. Please click on the confirm link in the mail.");

define("MESSAGE_CAPTCHA_WRONG", "Captcha was wrong!");
define("MESSAGE_COOKIE_INVALID", "Invalid cookie");
define("MESSAGE_DATABASE_ERROR", "Database connection problem.");
define("MESSAGE_EMAIL_ALREADY_EXISTS", "This email address is already registered. Please use the \"I forgot my password\" page if you don't remember it.");
define("MESSAGE_EMAIL_CHANGE_FAILED", "Sorry, your email changing failed.");
define("MESSAGE_EMAIL_CHANGED_SUCCESSFULLY", "Your email address has been changed successfully. New email address is ");
define("MESSAGE_EMAIL_EMPTY", "Email cannot be empty");
define("MESSAGE_EMAIL_INVALID", "Your email address is not in a valid email format");
define("MESSAGE_EMAIL_SAME_LIKE_OLD_ONE", "Sorry, that email address is the same as your current one. Please choose another one.");
define("MESSAGE_EMAIL_TOO_LONG", "Email cannot be longer than 64 characters");
define("MESSAGE_LINK_PARAMETER_EMPTY", "Empty link parameter data.");
define("MESSAGE_LOGGED_OUT", "You have been logged out.");
// The "login failed"-message is a security improved feedback that doesn't show a potential attacker if the user exists or not
define("MESSAGE_LOGIN_FAILED", "Login failed.");
define("MESSAGE_OLD_PASSWORD_WRONG", "Your OLD password was wrong.");
define("MESSAGE_PASSWORD_BAD_CONFIRM", "Password and password repeat are not the same");
define("MESSAGE_PASSWORD_CHANGE_FAILED", "Sorry, your password changing failed.");
define("MESSAGE_PASSWORD_CHANGED_SUCCESSFULLY", "Password successfully changed!");
define("MESSAGE_PASSWORD_EMPTY", "Password field was empty");
define("MESSAGE_PASSWORD_RESET_MAIL_FAILED", "Password reset mail NOT successfully sent! Error: ");
define("MESSAGE_PASSWORD_RESET_MAIL_SUCCESSFULLY_SENT", "Password reset mail successfully sent!");
define("MESSAGE_PASSWORD_TOO_SHORT", "Password has a minimum length of 6 characters");
define("MESSAGE_PASSWORD_WRONG", "Wrong password. Try again.");
define("MESSAGE_PASSWORD_WRONG_3_TIMES", "You have entered an incorrect password 3 or more times already. Please wait 30 seconds to try again.");
define("MESSAGE_REGISTRATION_ACTIVATION_NOT_SUCCESSFUL", "Sorry, no such id/verification code combination here...");
define("MESSAGE_REGISTRATION_ACTIVATION_SUCCESSFUL", "Activation was successful! You can now log in!");
define("MESSAGE_REGISTRATION_FAILED", "Sorry, your registration failed. Please go back and try again.");
define("MESSAGE_RESET_LINK_HAS_EXPIRED", "Your reset link has expired. Please use the reset link within one hour.");
define("MESSAGE_VERIFICATION_MAIL_ERROR", "Sorry, we could not send you an verification mail. Your account has NOT been created.");
define("MESSAGE_VERIFICATION_MAIL_NOT_SENT", "Verification Mail NOT successfully sent! Error: ");
define("MESSAGE_VERIFICATION_MAIL_SENT", "Your account has been created successfully and we have sent you an email. Please click the VERIFICATION LINK within that mail.");
define("MESSAGE_USER_DOES_NOT_EXIST", "This user does not exist");
define("MESSAGE_USERNAME_BAD_LENGTH", "Username cannot be shorter than 2 or longer than 64 characters");
define("MESSAGE_USERNAME_CHANGE_FAILED", "Sorry, your chosen username renaming failed");
define("MESSAGE_USERNAME_CHANGED_SUCCESSFULLY", "Your username has been changed successfully. New username is ");
define("MESSAGE_USERNAME_EMPTY", "Username field was empty");
define("MESSAGE_USERNAME_EXISTS", "Sorry, that username is already taken. Please choose another one.");
define("MESSAGE_USERNAME_INVALID", "Username does not fit the name scheme: only a-Z and numbers are allowed, 2 to 64 characters");
define("MESSAGE_USERNAME_SAME_LIKE_OLD_ONE", "Sorry, that username is the same as your current one. Please choose another one.");

// views
define("WORDING_BACK_TO_LOGIN", "Back to Login Page");
define("WORDING_CHANGE_EMAIL", "Change email");
define("WORDING_CHANGE_PASSWORD", "Change password");
define("WORDING_CHANGE_USERNAME", "Change username");
define("WORDING_CURRENTLY", "currently");
define("WORDING_EDIT_USER_DATA", "Edit user data");
define("WORDING_EDIT_YOUR_CREDENTIALS", "You are logged in and can edit your credentials here");
define("WORDING_FORGOT_MY_PASSWORD", "I forgot my password");
define("WORDING_LOGIN", "Log in");
define("WORDING_LOGOUT", "Log out");
define("WORDING_NEW_EMAIL", "New email");
define("WORDING_NEW_PASSWORD", "New password");
define("WORDING_NEW_PASSWORD_REPEAT", "Repeat new password");
define("WORDING_NEW_USERNAME", "New username (username cannot be empty and must be azAZ09 and 2-64 characters)");
define("WORDING_OLD_PASSWORD", "Your OLD Password");
define("WORDING_PASSWORD", "Password");
define("WORDING_PROFILE_PICTURE", "Your profile picture (from gravatar):");
define("WORDING_REGISTER", "Register");
define("WORDING_REGISTER_NEW_ACCOUNT", "Register new account");
define("WORDING_REGISTRATION_CAPTCHA", "Please enter these characters");
define("WORDING_REGISTRATION_EMAIL", "User's email (please provide a real email address, you'll get a verification mail with an activation link)");
define("WORDING_REGISTRATION_PASSWORD", "Password (min. 6 characters!)");
define("WORDING_REGISTRATION_PASSWORD_REPEAT", "Password repeat");
define("WORDING_REGISTRATION_USERNAME", "Username (only letters and numbers, 2 to 64 characters)");
define("WORDING_REMEMBER_ME", "Keep me logged in (for 2 weeks)");
define("WORDING_REQUEST_PASSWORD_RESET", "Request a password reset. Enter your username and you'll get a mail with instructions:");
define("WORDING_RESET_PASSWORD", "Reset my password");
define("WORDING_SUBMIT_NEW_PASSWORD", "Submit new password");
define("WORDING_USERNAME", "Username");
define("WORDING_YOU_ARE_LOGGED_IN_AS", "You are logged in as ");
*/

?>