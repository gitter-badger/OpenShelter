<?php
if(isset($_GET["t"])){ $t = preg_replace('#[^a-z0-9]#i', '', $_GET['t']); } else { header("location: index.php"); exit(); }
include("conf.php");
include("include/header.php");
if ($t != "cats") {  if ($t != "dogs") { header("location: index.php"); exit(); } }
if ($t == "cats") { echo '<h1>Cats for adoption</h1><p>You will need a letter from your landlord if you are renting giving permission to keep an animal. When adopting a cat or kitten please remember to bring a cat carry basket as this is the only safe way of transporting a cat or kitten.</p>'; }
if ($t == "dogs") { echo '<h1>Dogs for adoption</h1><p>You will need a letter from your landlord if you are renting giving permission to keep an animal. For more information about the dogs please ring the Shelter because we have dogs coming in and being re-homed so quickly that they never make it to the web site.</p>'; }
$counter = 0;
$sql = "SELECT * FROM ".$t." WHERE id!='0' ORDER BY RAND()";
$query = mysqli_query($db, $sql);
echo '<table><tr>';
	while($row = mysqli_fetch_array($query)) {
	  echo '<td><center><img width="200" src="';
	  if ($row['photo'] == '') { echo 'http://images.rartoo.com/images/noimageuploaded.png'; }
	  if ($row['photo'] != '') { echo $row['photo']; }
	  echo '"><h1>';
	  echo $row['name'];
	  echo '</h1>';
	  echo $row['bio'];
	  echo '</center></td><td>&nbsp;</td>';
  	  $counter = $counter +1;
 	  if ($counter =="3") { echo '</tr><tr><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td></tr><tr>'; $counter = 0; }
	}
echo "</tr></table><hr><br>";
echo "<b>If you are interested in adopting one of our ".$t." above please contact us to arrange an appointment to come and meet in person at our shelter.</b>";
include("include/footer.php");
?>