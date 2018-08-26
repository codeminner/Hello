<?php

$file = $_GET['name'];


unlink($file);

header("location: index.php");
echo"<h3>File Deleted!</h3><a href='index.php'>Click Here To Continue</a>";
?>

