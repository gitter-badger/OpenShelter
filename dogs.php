<?php
include("conf.php");
include("header.php");
?>
<h1>Dogs for adoption</h1>
<p>	If you are looking for a companion for your dog, please bring your dog with you.</p>
<p>You will need a letter from your landlord if you are renting giving permission to keep an animal. For more information about the dogs please ring the Shelter because we have dogs coming in and being re-homed so quickly that they never make it to the web site.</p>
<?php $dogcounter = 0;
$sql = "SELECT * FROM dogs WHERE id!='0' ORDER BY RAND()";
$query = mysqli_query($db, $sql);
echo '<table><tr>';
	while($row = mysqli_fetch_array($query)) {
	  echo '<td valign="top"><center><img width="200" src="';
	  if ($row['photo'] == '') { echo 'http://images.rartoo.com/images/noimageuploaded.png'; }
	  if ($row['photo'] != '') { echo $row['photo']; }
	  echo '"><h1>';
	  echo $row['name'];
	  echo '</h1>';
	  echo $row['bio'];
	  echo '</center></td><td>&nbsp;</td>';
  	  $dogcounter = $dogcounter +1;
 	  if ($dogcounter =="3") { echo '</tr><tr><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td></tr><tr>'; $dogcounter = 0; }
}
echo "</tr></table>";
echo "<b>If you are interested in adopting one of our dogs above please contact us to arrange an appointment to come and meet in person at our shelter.</b>";
include("footer.php");
?>

	