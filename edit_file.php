<html>
<?php
header('Location: http://127.0.0.1/Colossians/');
#you dont need this unless you want to redirect
?>...




<?php

$edit = $_POST['edit'];
$file_name = $_POST['file_name'];
$file = fopen($file_name,'w');
fwrite($file,$edit);
//fclose($file);?>



<?php echo $_POST['edit'];?>



<?php
fclose($file);

echo "<br/>";
echo "File saved! <a href = 'index.php'>Click Here To Continue</a> ";

;?>
