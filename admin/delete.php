<?php
include_once("../conf.php");
if(isset($_GET["t"])){
	$t = preg_replace('#[^a-z0-9]#i', '', $_GET['t']);
} else {
    header("location: index.php");
    exit();	
}
if(isset($_GET["id"])){
	$id = preg_replace('#[^a-z0-9]#i', '', $_GET['id']);
} else {
    header("location: index.php");
    exit();	
}
if ($t == "c") { $sql = "DELETE FROM cats WHERE id=$id" ;}
if ($t == "d") { $sql = "DELETE FROM dogs WHERE id=$id" ;}
$query = mysqli_query($db, $sql);
echo '<center><br><h1>Deleted OK</h1><br><br>';
if ($t == "c") { echo '<a href="cats.php">back to cat listings</a><br><br>' ;}
if ($t == "d") { echo '<a href="dogs.php">back to dog listings</a><br><br>' ;}
?>
<a href="./">return to admin home</a>