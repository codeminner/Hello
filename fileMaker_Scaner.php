<div id= "sidebar" class="scroll"><?php include('./fileForm1.php');?><?php
$dir = "Colossians";
$full_path = ".";

$dir = @opendir($full_path) or die ("Unable to open directory");
while($file = readdir($dir))
{
             
if($file == "."
|| $file == ".."
|| $file == "createFile.php"
|| $file == "css"
|| $file == "delete.php"
|| $file == "edit.php"
|| $file == "edit_file.php"
|| $file == "fileForm1.php"
|| $file == "fileMaker_Scaner.php"
|| $file == "file_dircontents.php"
|| $file == "footer.php"
|| $file == "id_img"
|| $file == "id_img.php"
|| $file == "id_imgScanner.php"
|| $file == "includes"
|| $file == "index.php"
|| $file == "pageheader.php"
|| $file == "style.css"
|| $file == "upload_form.php"
|| $file == "users")    
     
			                          
   continue;
   
   
   
echo"  <ul><li> 
   <a href ='$file'>$file</a></li></h4><br/> 
   <span> <a href='edit.php?name=$file'>Edit</a> |
   <a href='delete.php?name=$file'>Delete</a>
   <br/><hr/></ul></span>
   
   "; 
   #closes  menu
	
}

closedir($dir);
   


?> </div> <!--sidebar scroll-->  