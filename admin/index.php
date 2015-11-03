<font face="arial">
<center><br><h1>Administration Panel</h1>
<table cellpadding=60><tr>
<td valign=top>
<h2>Cats</h2>
<a href="cats.php">List Cats</a><br><br>
<a href="addcat.php">Add Cat</a>
</td>
<td valign=top>
<h2>Dogs</h2>
<a href="dogs.php">List Dogs</a><br><br>
<a href="adddog.php">Add Dog</a>
</td>
<td valign=top>
<h2>Pages</h2>
<?php include("../conf.php"); 
$sql = "SELECT * FROM pages WHERE id!='0'";
$query = mysqli_query($db, $sql);
	while($row = mysqli_fetch_array($query)) { echo $row['title'].' (<a href="editpage.php?p='.$row['pagename'].'">edit</a>)</b><br><br>'; }
	?>
</td>
</tr></table>
<a href="../">Exit Administration Panel</a></center>