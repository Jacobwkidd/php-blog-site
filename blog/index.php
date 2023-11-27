<?php
include("../includes/config.inc.php");
$pageTitle = "Blog";
$pageDescription = "A listing of links to blog posts";
include("../includes/header.inc.php");
// echo($x);



include("../includes/PageDataAccess.inc.php");
$da = new PageDataAccess(get_link());
$allPosts = $da->getAll();
//var_dump($allPosts);

function createPostList($posts){
	$html = "<ol>";
	foreach($posts as $p){
		$html .= "<li>";
		$html .= "<h2><a href='blog-page.php?id={$p["id"]}'>{$p["title"]}</a></h2>";
		$html .= "<p>{$p["description"]}</p>";
		$html .= "</li>";
	}

	$html .= "</ol>";
	return $html;
}



?>


		<main>
			<h1>Blog List</h1>
			<?php echo(createPostList($allPosts));?>
		</main>
		<aside>
				Side Bar
		</aside>

<?php
include("../includes/footer.inc.php");
?>