<?php include_once("../conf.php"); ?>
<center><table width="800"><font face="arial"><h1>Dogs for adoption - <a href="./">go back</a></h1>
<?php $dogcounter = 0;
$sql = "SELECT * FROM dogs WHERE id!='0' ORDER BY RAND()";
$query = mysqli_query($db, $sql);
echo '<hr><table width="800"><tr>';
	while($row = mysqli_fetch_array($query)) {
 	  if ($dogcounter =="3") { echo '</tr><tr><td colspan="5"><hr></td></tr><tr>'; $dogcounter = 0; }
	  echo '<td><font face="arial"><center><img width="200" src="';
	  if ($row['photo'] == '') { echo '../images/nophoto.png'; }
	  if ($row['photo'] != '') { echo '../images/'.$row['photo']; }
	  echo '"><h1>';
	  echo $row['name'];
	  echo '</h1>';
	  echo $row['bio'];
	  echo '<br><br><b><a href="delete.php?t=d&id='.$row['id'].'">DELETE DOG</a></b></center></td><td>&nbsp;</td>';
  	  $dogcounter = $dogcounter +1;
}
echo "</tr></table><hr>"; ?>