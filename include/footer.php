<?php
	echo '</table><br><b>';
	include("nav.php");
	echo '</b><br><br>';
?>
&copy; <?php echo date("Y") ?> <a href="./"><?php	echo $sheltername.'</a>';
	if ($showopenshelter == '1') { echo ' | Powered by <a href="http://seanslater.com/OpenShelter">OpenShelter</a>'; }
	echo '</html>';
?>