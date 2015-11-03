<?php include_once("../conf.php");
if(isset($_GET["t"])){ $t = preg_replace('#[^a-z0-9]#i', '', $_GET['t']); } else { header("location: index.php"); exit(); }
if ($t != "c") {  if ($t != "d") { echo "Error"; exit(); } }
$name = htmlspecialchars($_POST["name"]);
$bio = htmlspecialchars($_POST["bio"]);
$gender = htmlspecialchars($_POST["gender"]);
$added = getdate();
if ($t == "c") {$t = "cats" ;}
if ($t == "d") {$t = "dogs" ;}

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target_url = basename($_FILES["fileToUpload"]["name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<center><font face=\"arial\">The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

$sql = "INSERT INTO `".$t."` (`name`, `bio`, `photo`, `gender`, `added`) VALUES ('".$name."', '".$bio."', '".$target_url."', '".$gender."', '".$added."')";
$query = mysqli_query($db, $sql);
echo '<font face="arial"><center><br><h1>';
if ($t == "cats") { echo 'Cat' ;}
if ($t == "dogs") { echo 'Dog' ;}
echo ' added OK</h1><br><br>';
if ($t == "cats") { echo '<a href="cats.php">back to cat listings</a><br><br>' ;}
if ($t == "dogs") { echo '<a href="dogs.php">back to dog listings</a><br><br>' ;}
?>
<a href="./">return to admin home</a>
