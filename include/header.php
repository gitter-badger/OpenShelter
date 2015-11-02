<html>
<head><title><?php echo $sheltername ?></title></head>
<body>
<center><font face="arial">
<table width="800"><br><h1><?php echo $sheltername ?></h1><h2><?php echo $sheltertag ?></h2>
<?php include("nav.php"); ?>
<br><br></table>
<table width="800"><td width="300" valign="top">
<?php
$sql = "SELECT * FROM pages WHERE pagename='sidebar' LIMIT 1";
$query = mysqli_query($db, $sql);
while($row = mysqli_fetch_array($query)) {
	  echo $row['text'];
	}
?>
</td><td>&nbsp;</td><td>