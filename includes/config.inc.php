<?php
include("custom-error-handler.inc.php");
include("custom-exception-handler.inc.php");

// $host = "localhost";
// $db = "php_blog_site";
// $user = "root";
// $password = "test";

if($_SERVER['SERVER_NAME'] == "localhost"){
    define("PROJECT_FOLDER", "/php-blog-site/");
    define("DEBUG_MODE", true);
    define("SITE_ADMIN_EMAIL", "kiddj1@students.westerntc.edu");
    define("SITE_DOMAIN", $_SERVER['SERVER_NAME']);
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "test");
    define("DB_NAME", "php_blog_site");
}
else{
    define("PROJECT_FOLDER", "/");
    define("DEBUG_MODE", false);
    define("SITE_ADMIN_EMAIL", "kiddj1@students.westerntc.edu");
    define("SITE_DOMAIN", $_SERVER['SERVER_NAME']);
    define("DB_HOST", "xx");
    define("DB_USER", "xx");
    define("DB_PASSWORD", "x");
    define("DB_NAME", "xx");
}

$link = null;

function get_link(){
    global $link;
    if($link == null){
        $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    }
    
    return $link;
}