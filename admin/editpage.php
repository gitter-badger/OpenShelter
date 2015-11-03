<script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php include_once("../conf.php");
if(isset($_GET["p"])){ $p = preg_replace('#[^a-z0-9]#i', '', $_GET['p']); } else { header("location: index.php"); exit(); }
$sql = "SELECT * FROM pages WHERE pagename='".$p."' LIMIT 1";
$query = mysqli_query($db, $sql);
while($row = mysqli_fetch_array($query)) { $pagename = $row['pagename']; $pagetitle = $row['title']; $oldtext = $row['text']; }
echo '<font face="arial"><h1>'.$pagetitle.' ('.$pagename.')</h1>';
echo '<hr>';
echo $oldtext;
echo '<hr><h1>Editing</h1>';
?>
<form action="savepage.php?p=<?php echo $pagename; ?>" method="post">
 <textarea name="newtext" id="editor1"" rows="30" cols="150">
<?php echo $oldtext; ?>
</textarea>
<br><br>
   <script>
 CKEDITOR.replace( 'editor1', {
    toolbar: [
    { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'RemoveFormat' ] },
    { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
    { name: 'links', items: [ 'Link', 'Unlink' ] },
    { name: 'insert', items: [ 'Image', 'HorizontalRule', 'PageBreak' ] },
    '/',
    { name: 'styles', items: [ 'Font', 'FontSize' ] },
    { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
    { name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
    { name: 'document', items: [ 'Source' ] },
]
});
   </script>
<input type="submit" value="SAVE CHANGES"/>
</form>
<hr><br><a href="./">cancel and return to admin home</a>