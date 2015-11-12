<html>
<head>
<script type="text/javascript" src="../tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: "#mytextarea",
			plugins: ["jbimages", "textcolor"],			
			toolbar: "undo | fontselect fontsizeselect bold italic underline forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist | jbimages",
			menubar: false,
			relative_urls: false
        });
    </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php include_once("../conf.php");
if(isset($_GET["p"])){ $p = preg_replace('#[^a-z0-9]#i', '', $_GET['p']); } else { header("location: index.php"); exit(); }
$sql = "SELECT * FROM pages WHERE pagename='".$p."' LIMIT 1";
$query = mysqli_query($db, $sql);
while($row = mysqli_fetch_array($query)) { $pagename = $row['pagename']; $pagetitle = $row['title']; $oldtext = $row['text']; }
echo '<font face="arial"><h1>Editing '.$pagetitle.'</h1>';
?>
<form action="savepage.php?p=<?php echo $pagename; ?>" method="post">
 <textarea name="newtext" id="mytextarea" rows="30" cols="150">
<?php echo $oldtext; ?>
</textarea>
<br><br>
<input type="submit" value="SAVE CHANGES"/>
</form>
<br>or <a href="./">CANCEL and go back</a><br>