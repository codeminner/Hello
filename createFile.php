<?php

$pre_file_name = $_POST['name'];

$ext = ".html";

$file_name = $pre_file_name.$ext;

fopen($file_name,'w');



?>

<html>
<form action ="edit_file.php"  enctype = "multipart/form-data" method ="POST">
<input type = "hidden" name ="MAX_FILE_SIZE" value ="10000000"/>
<textarea name="edit" cols="70" rows ="20" placeholder="edit">
<?php include('../pageHeader.php');?>
<?php include('../sidenav.php');?>
<?php include('includes/pageScroll.php');?>
<?php include('../pagefooter.php');?>




</textarea><p>
<input type = "hidden" name = "file_name"value = "<?php echo $file_name; ?>">
<input type = "submit" value = "Save">

<p>
<h2>Files</h2>
</html>
