<?php include_once("../conf.php");
if(isset($_GET["p"])){ $p = preg_replace('#[^a-z0-9]#i', '', $_GET['p']); } else { header("location: index.php"); exit(); }
$pagename = $p;
$newtext = htmlspecialchars_decode($_POST["newtext"]);
echo '<br><br><br>';
$sql = "UPDATE `pages` SET text ='$newtext' WHERE pagename='$pagename'" ;
$query = mysqli_query($db, $sql);
echo '<font face="arial"><center><br><h1>Page changes SAVED</h1><br><br><a href="./">back to admin home</a><br><br>' ;
?>