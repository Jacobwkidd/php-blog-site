<?php
include("custom-error-handler.inc.php");
include("custom-exception-handler.inc.php");

if($_SERVER['SERVER_NAME'] == "localhost"){
    define("PROJECT_FOLDER", "/php-blog-site/");
    define("DEBUG_MODE", true);
    define("SITE_ADMIN_EMAIL", "kiddj1@students.westerntc.edu");
    define("SITE_DOMAIN", $_SERVER['SERVER_NAME']);
}
else{
    define("PROJECT_FOLDER", "/");
    define("DEBUG_MODE", false);
    define("SITE_ADMIN_EMAIL", "kiddj1@students.westerntc.edu");
    define("SITE_DOMAIN", $_SERVER['SERVER_NAME']);
}