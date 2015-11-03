<?php include_once("../conf.php");
if(isset($_GET["t"])){ $t = preg_replace('#[^a-z0-9]#i', '', $_GET['t']); } else { header("location: index.php"); exit(); }
if(isset($_GET["id"])){	$id = preg_replace('#[^a-z0-9]#i', '', $_GET['id']); } else { header("location: index.php"); exit(); }
if ($t == "c") { $sql = "DELETE FROM cats WHERE id=$id" ;}
if ($t == "d") { $sql = "DELETE FROM dogs WHERE id=$id" ;}
$query = mysqli_query($db, $sql);
if ($t == "c") { header("location: cats.php?delete=1"); ;}
if ($t == "d") { header("location: dogs.php?delete=1"); ;}
?>