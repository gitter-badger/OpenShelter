<?php
include_once("../conf.php");
if(isset($_GET["t"])){ $t = preg_replace('#[^a-z0-9]#i', '', $_GET['t']); } else { header("location: index.php"); exit(); }
if ($t != "c") {  if ($t != "d") { echo "Error"; exit(); } }
$name = htmlspecialchars($_POST["name"]);
$bio = htmlspecialchars($_POST["bio"]);
$photo = htmlspecialchars($_POST["photo"]);
$gender = htmlspecialchars($_POST["gender"]);
$added = getdate();
if ($t == "c") {$t = "cats" ;}
if ($t == "d") {$t = "dogs" ;}
$sql = "INSERT INTO `".$t."` (`name`, `bio`, `photo`, `gender`, `added`) VALUES ('".$name."', '".$bio."', '".$photo."', '".$gender."', '".$added."')";
$query = mysqli_query($db, $sql);
echo '<center><br><h1>Added OK</h1><br><br>';
if ($t == "cats") { echo '<a href="cats.php">back to cat listings</a><br><br>' ;}
if ($t == "dogs") { echo '<a href="dogs.php">back to dog listings</a><br><br>' ;}
?>
<a href="./">return to admin home</a>
