<?php
include("conf.php");
include("header.php");
?>
<h1>Cats for adoption</h1>
<p>You will need a letter from your landlord if you are renting giving permission to keep an animal. When adopting a cat or kitten please remember to bring a cat carry basket as this is the only safe way of transporting a cat or kitten.</p>
<?php $catcounter = 0;
$sql = "SELECT * FROM cats WHERE id!='0' ORDER BY RAND()";
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
  	  $catcounter = $catcounter +1;
 	  if ($catcounter =="3") { echo '</tr><tr><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td></tr><tr>'; $catcounter = 0; }
}
echo "</tr></table><hr><br>";
echo "<b>If you are interested in adopting one of our cats above please contact us to arrange an appointment to come and meet in person at our shelter.</b>";
include("footer.php");
?>