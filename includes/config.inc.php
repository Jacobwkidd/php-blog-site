<?php

if($_SERVER['SERVER_NAME'] == "localhost"){
    define("PROJECT_FOLDER", "/php-blog-site/");
}
else{
    define("PROJECT_FOLDER", "/");
}