<?php
include("../includes/config.inc.php");
$pageTitle = "";
$pageDescription = "";

$post = [];
$postId = $_GET["id"] ?? null;

if($postId){
		


	// echo($x);

	$host = "localhost";
	$db = "php_blog_site";
	$user = "root";
	$password = "test";

	$link = mysqli_connect($host, $user, $password, $db);
	// var_dump($link);

	$qStr = "SELECT * FROM pages WHERE id = " . $postId . " AND published IS NOT NULL";
	// echo($qStr);
	$result = mySqli_query($link, $qStr);
	if(mysqli_num_rows($result) == 1){
		$row = mysqli_fetch_assoc($result);
		// var_dump($row);
		$post['title'] = htmlentities($row["title"]);
		$post['description'] = htmlentities($row["description"]);
		$post['content'] = $row["content"];
		// echo($post["content"]);
		$pageTitle = $post['title'];
		$pageDescription = $post['description'];
	}
	else{
		throw new Exception("Invalid POST ID");
	}
}
else{
	throw new Exception("NO ID");
}
include("../includes/header.inc.php");

?>


		<main>
			<h1><?=$post['title'];?></h1>
			
		</main>
		<aside>
				Side Bar
		</aside>

<?php
include("../includes/footer.inc.php");
?>