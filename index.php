<?php include("conf.php"); include("include/header.php");
?>
<tr>
<td width="300" valign="top">
<?php $sql = "SELECT * FROM pages WHERE pagename='sidebar' LIMIT 1";
$query = mysqli_query($db, $sql);
while($row = mysqli_fetch_array($query)) { echo $row['text']; } ?>
</td><td>&nbsp;</td><td>
<?php
$sql = "SELECT * FROM pages WHERE pagename='news' LIMIT 1";
$query = mysqli_query($db, $sql);
while($row = mysqli_fetch_array($query)) {
	  echo "<h1>".$row['title']."</h1>";
	  echo $row['text'];
	}
// $sql = "SELECT * FROM cats WHERE photo!='' ORDER BY RAND() LIMIT 3";
// $query = mysqli_query($db, $sql);
// echo '<h1>Cats for adoption</h1><table><tr>';
// 	while($row = mysqli_fetch_array($query)) {
// 	  echo '<td><center><a href="view.php?t=cats"><img width="200" src="' .$row['photo']. '"></a><h1>';
// 	  echo $row['name'];
// 	  echo '</h1></center></td>';
// 	}
// echo "</tr></table>";
// $sql = "SELECT * FROM dogs WHERE photo!='' ORDER BY RAND() LIMIT 3";
// $query = mysqli_query($db, $sql);
// echo '<h1>Dogs for adoption</h1><table><tr>';
// 	while($row = mysqli_fetch_array($query)) {
// 	  echo '<td><center><a href="view.php?t=dogs"><img width="200" src="' .$row['photo']. '"></a><h1>';
// 	  echo $row['name'];
// 	  echo '</h1></center></td>';
// 	}
echo "</tr></table>";
include("include/footer.php"); ?>