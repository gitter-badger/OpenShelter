<?php if(isset($_GET["t"])){ $t = preg_replace('#[^a-z0-9]#i', '', $_GET['t']); } else { header("location: index.php"); exit(); } include("conf.php"); include("include/header.php");
if ($t != "cats") {  if ($t != "dogs") { header("location: index.php"); exit(); } }
if ($t == "cats") { echo '<table width=800 cellpadding=10><tr><td bgcolor="#ffffff"><h1><font face="Comic Sans MS" color="#0000ff">CATS NEEDING HOMES</font></h1><center><b>You will need a letter from your landlord if you are renting giving permission to keep an animal.<br><br>When adopting a cat or kitten please remember to bring a cat carry basket as this is the only<br>safe way of transporting a cat or kitten.</b></center><br>'; }
if ($t == "dogs") { echo '<table width=800 cellpadding=10><tr><td bgcolor="#ffffff"><h1><font face="Comic Sans MS" color="#0000ff">DOGS NEEDING HOMES</font></h1><center><b>If you are looking for a companion for your dog, please bring your dog with you.<br><br>You will need a letter from your landlord if you are renting giving permission to keep an animal.<br><br>For more information about the dogs please ring the shelter because we have dogs<br>coming in and being re-homed so quickly that they never make it to the web site.</b></center><br>'; }
$counter = 0;
$sql = "SELECT * FROM ".$t." WHERE id!='0' ORDER BY RAND()";
$query = mysqli_query($db, $sql);
echo '<hr><table><tr>';
	while($row = mysqli_fetch_array($query)) {
	  if ($counter =="3") { echo '</tr><tr><td colspan="5"><hr></td></tr><tr>'; $counter = 0; }
	  echo '<td><center><img width="200" src="';
	  if ($row['photo'] == '') { echo 'images/nophoto.png'; }
	  if ($row['photo'] != '') { echo 'images/'.$row['photo']; }
	  echo '"><h1>';
	  echo $row['name'];
	  echo '</h1>';
	  echo $row['bio'];
	  echo '</center></td><td>&nbsp;</td>';
  	  $counter = $counter +1;
 	}
echo "</tr></table>";
include("include/footer.php"); ?>




