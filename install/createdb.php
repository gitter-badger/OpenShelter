<?php
include_once("../conf.php");
$table_cats = "CREATE TABLE IF NOT EXISTS cats (
              id INT(11) NOT NULL AUTO_INCREMENT,
			  name VARCHAR(50) NOT NULL,
   			  bio VARCHAR(2500) NOT NULL,
  			  photo VARCHAR(250) NOT NULL,
			  gender ENUM('m','f') NOT NULL,
			  added DATETIME NOT NULL,
              PRIMARY KEY (id),
			  UNIQUE KEY name (name,id)
             )";
$query = mysqli_query($db, $table_cats);
if ($query === TRUE) {
	echo "<h3>Cats table created OK :) </h3>"; 
} else {
	echo "<h3>Cats table NOT created :( </h3>"; 
}
$table_dogs = "CREATE TABLE IF NOT EXISTS dogs (
              id INT(11) NOT NULL AUTO_INCREMENT,
			  name VARCHAR(50) NOT NULL,
   			  bio VARCHAR(2500) NOT NULL,
  			  photo VARCHAR(250) NOT NULL,
			  gender ENUM('m','f') NOT NULL,
			  added DATETIME NOT NULL,
              PRIMARY KEY (id),
			  UNIQUE KEY name (name,id)
             )";
$query = mysqli_query($db, $table_dogs);
if ($query === TRUE) {
	echo '<h3>Dogs table created OK :) </h3>'; 
} else {
	echo '<h3>Dogs table NOT created :( </h3>'; 
}
$table_pages = "CREATE TABLE IF NOT EXISTS pages (
              id INT(11) NOT NULL AUTO_INCREMENT,
			  pagename VARCHAR(20) NOT NULL,
   			  title VARCHAR(250) NOT NULL,
  			  text VARCHAR(2500) NOT NULL,
              PRIMARY KEY (id),
			  UNIQUE KEY pagename (pagename,id)
             )";
$query = mysqli_query($db, $table_pages);
if ($query === TRUE) {
	echo '<h3>Pages table created OK :) </h3><a href="insertdummydata.php">Click here to fill database with dummy data</a>'; 
} else {
	echo '<h3>Pages table NOT created :( </h3><a href="./">Click to go back and try again</a>'; 
}
?>
