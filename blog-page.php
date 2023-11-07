<?php
include("../includes/config.inc.php");
include("../includes/PageDataAccess.inc.php");
$pageTitle = "";
$pageDescription = "";

$post = [];
$postId = $_GET["id"] ?? null;

if($postId){
    $pda = new PageDataAccess(get_link());
    $post = $pda->getById($postId);
    // var_dump($post);
    $pageTitle = $post["title"];
    $pageDescription = $post["description"];
}
else{
    throw new Exception("NO ID");
}

include("../includes/header.inc.php");



?>