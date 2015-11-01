<?php
include_once("../conf.php");
?>
<center>
<table width="800">
<h1>Cats for adoption - <a href="./">go back</a></h1>
<?php $catcounter = 0;
// Display Cats
$sql = "SELECT * FROM cats WHERE id!='0' ORDER BY RAND()";
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
	  echo '<br><br><b><a href="delete.php?t=c&id='.$row['id'].'">DELETE CAT</a></b></center></td><td>&nbsp;</td>';
  	  $catcounter = $catcounter +1;
 	  if ($catcounter =="3") { echo '</tr><tr><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td></tr><tr>'; $catcounter = 0; }
}
echo "</tr></table>";
?>
