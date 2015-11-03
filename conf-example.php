 <?php
///////////////////////////
// Configuration Options //
///////////////////////////

// Database connection
	$db = new mysqli('localhost:3306', '<database user>', '<database password>', '<database name>');

// Shelter Name
	$sheltername = 'Animal Shelter';
 
// Shelter Tagline
	$sheltertag = 'Giving abandoned cats and dogs a second chance to find loving homes'; 
 
// Display link to OpenShelter in footer (1=Yes 0=No)
	$showopenshelter ='1';
	
// Image uploads go in this folder	
	$target_dir = "images/";
 ?>