<?php
include("conf.php");
include("include/header.php");
?>
<h1>News</h1>
<b>Vale Sue Whelan, co-founder of the Shelter</b><br>
<p>Our dear friend Sue has passed away. She spent the last 23 years of her life dedicated to the Shelter. No mean achievement when you think of the thousands of animals that have found new homes in that time.</p>
<p>She was also responsible for the boarding kennels and cattery. Many owners brought their animals to her for boarding because they trusted her.</p>
<p>She has left a great hole in our lives. We all have fond memories of her which will remain with us always. Hopefully we can carry on her good work if we get the continued support of the community.</p>
<p>Dear Sue forever in our hearts.</p>
<p>We will not be able to have the '4 paws walk' this year. We apologise for any disappointment this may cause.</p>
<h1>Cats for adoption</h1>
<?php // Display Cats
$sql = "SELECT * FROM cats WHERE photo!='' ORDER BY RAND() LIMIT 3";
$query = mysqli_query($db, $sql);
echo '<table><tr>';
	while($row = mysqli_fetch_array($query)) {
	  echo '<td><center><a href="view.php?t=cats"><img width="200" src="' .$row['photo']. '"></a><h1>';
	  echo $row['name'];
	  echo '</h1></center></td>';
	}
echo "</tr></table>";
?>
<h1>Dogs for adoption</h1>
<?php // Display Dogs
$sql = "SELECT * FROM dogs WHERE photo!='' ORDER BY RAND() LIMIT 3";
$query = mysqli_query($db, $sql);
echo '<table><tr>';
	while($row = mysqli_fetch_array($query)) {
	  echo '<td><center><a href="view.php?t=dogs"><img width="200" src="' .$row['photo']. '"></a><h1>';
	  echo $row['name'];
	  echo '</h1></center></td>';
	}
echo "</tr></table>";
include("include/footer.php");
?>

	
	