<font face="arial">
<h1>Administration Panel</h1>
<h2>Cats</h2>
<a href="cats.php">List Cats</a><br><br>
<a href="addcat.php">Add Cat</a>
<h2>Dogs</h2>
<a href="dogs.php">List Dogs</a><br><br>
<a href="adddog.php">Add Dog</a>
<h2>Pages</h2>
<?php
include("../conf.php"); 
$sql = "SELECT * FROM pages WHERE id!='0'";
$query = mysqli_query($db, $sql);
	while($row = mysqli_fetch_array($query)) {
	  echo $row['title'].' (<a href="editpage.php?p='.$row['pagename'].'">edit</a>)</b><br><br>';
	}
?>
<br><br><br>
<a href="../">Exit Administration Panel and view public website</a>