<?php
include_once("../conf.php");
?>
<center>
<table width="800">
<h1>Dogs for adoption - <a href="../admin">go back</a></h1>
<?php $dogcounter = 0;
// Display Cats
$sql = "SELECT * FROM dogs WHERE id!='0' ORDER BY RAND()";
$query = mysqli_query($db, $sql);
echo '<table width="800"><tr>';
	while($row = mysqli_fetch_array($query)) {
	  echo '<td><center><img width="200" src="';
	  if ($row['photo'] == '') { echo 'http://images.rartoo.com/images/noimageuploaded.png'; }
	  if ($row['photo'] != '') { echo $row['photo']; }
	  echo '"><h1>';
	  echo $row['name'];
	  echo '</h1>';
	  echo $row['bio'];
	  echo '<br><br><b><a href="delete.php?t=d&id='.$row['id'].'">DELETE DOG</a></b></center></td><td>&nbsp;</td>';
  	  $dogcounter = $dogcounter +1;
 	  if ($dogcounter =="3") { echo '</tr><tr><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td></tr><tr>'; $dogcounter = 0; }
}
echo "</tr></table>";
?>