<?php if(isset($_GET["p"])){ $p = preg_replace('#[^a-z0-9]#i', '', $_GET['p']); } else { header("location: index.php"); exit(); }
include("conf.php");
include("include/header.php");
$sql = "SELECT * FROM pages WHERE pagename='$p' LIMIT 1";
$query = mysqli_query($db, $sql);
while($row = mysqli_fetch_array($query)) {
	  echo "<h1>".$row['title']."</h1>";
	  echo $row['text'];
	}
include("include/footer.php"); ?>