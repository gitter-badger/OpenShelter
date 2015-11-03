<?php include_once("../conf.php");
if(isset($_GET["delete"])){	$delete = preg_replace('#[^a-z0-9]#i', '', $_GET['delete']); } else { $delete = '0' ; }
 ?>
<center><table width="800">
<font face="arial">
<?php if ( $delete == '1') { echo '<h1><font color=green>Cat deleted OK</font></h1>'; }?>
<h1>Cats for adoption - <a href="./">go back</a></h1>
<?php $catcounter = 0;
$sql = "SELECT * FROM cats WHERE id!='0' ORDER BY RAND()";
$query = mysqli_query($db, $sql);
echo '<hr><table width="800"><tr>';
	while($row = mysqli_fetch_array($query)) {
	  echo '<td><font face="arial"><center><img width="200" src="';
	  if ($row['photo'] == '') { echo '../images/nophoto.png'; }
	  if ($row['photo'] != '') { echo '../images/'.$row['photo']; }
	  echo '"><h1>';
	  echo $row['name'];
	  echo '</h1>';
	  echo $row['bio'];
	  echo '<br><br><b><a href="delete.php?t=c&id='.$row['id'].'">DELETE CAT</a></b></center></td><td>&nbsp;</td>';
  	  $catcounter = $catcounter +1;
 	  if ($catcounter =="3") { echo '</tr><tr><td colspan="5"><hr></td></tr><tr>'; $catcounter = 0; }
}
echo "</tr></table><hr>"; ?>