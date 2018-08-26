<head>
<style>
body{
	
  width:100vw;	
    height:100vh;	
    margin:0 auto;
    background-color:#007744;
    /*border:1px #000;*/
    border-radius:12px;
    box-shadow: 10px 10px 40px 10px #00592D inset; 
    font-family:'Indie Flower', cursive;		
}

#wrapper{
    width:1000px;
	height:100vh;
    	
    margin:0 auto;
    background-color:#00ff00;		
    border:1px #000;
    /*border-radius:12px;*/
    box-shadow: 10px 10px 40px 10px #007744 inset ; 
    font-family:'Indie Flower', cursive;	
}

#sidebar{
    width:309px;
    height:81vh;	
 
    padding-right:px;
    padding-left:25px;	
    margin:0 auto;
    float:right;
    background-color:#00ff00;
    border:px 1#000;
    border-radius:12px;
    box-shadow: 10px 10px 40px 10px #00592D inset ; 
    font-family:'Indie Flower', cursive;
		
}

#content{
    width:660px;
	
    min-height:0px;	
    max-height:54vh;	
    margin:0 auto;
    background-color:#00ff00;	
    float:right;
    padding-top:20px;
	padding-bottom:20px;
	padding-right:px;
    padding-left:5px;
    border:1px #000;
    border-radius:12px;
    box-shadow: 10px 10px 40px 10px #00592D inset ; 
    font-family:'gabriola';		
	
	
	
	
	
}

</style>
</head>

<?php
#header('Location: http://127.0.0.1/index.php');

?>...

<?php

$file_name = $_GET['name'];

$file_read = fopen($file_name,"r");
$contents = fread($file_read,filesize($file_name));


fclose($file_read);

?> <div id = "wrapper">
 <!--<div id = "sidebar"><h2>File Upload</h2>-->

<div id = "content"><center>
<form action ="edit_file.php"method ="post">
<input type = "hidden" name ="MAX_FILE_SIZE" value ="10000000"/>
<textarea name="edit" cols="73" rows ="15" placeholder="edit">
<?php echo $contents;?>







</textarea><p>
<input type = "hidden" name = "file_name"value = "<?php echo $file_name; ?>"> 
 </center>  
<input type="submit" name="submit" size="20" value="save" placeholder="save">

<input type="reset" size="20" name ="reset"><br/>

	  

</a>
</div>
<p>
<h2>this is edit.php</h2>
</div>