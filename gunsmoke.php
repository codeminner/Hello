





<style>
/*sidenav begings*/

.sidenav {
    height: 100vh;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    /*padding-top: 60px;*/
}
/*side nav a font color and menu placement*/
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #fff;
    display: block;
    transition: 0.3s;
}

/*side nav a tag high light*/

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
	
	float:right important!;
    transition: margin-right .5s;
    padding:px;
}

/*this controls the sidenave page and the h2 title tag*/

@media screen and (max-height: 620px) {
	width:100%;
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
  #main  {font-size:18px;}
  h1 {font-size:28px;}
}

p{width:70%;padding-left: 15%;}
</style>
<div id="main"><h2>WELCOME</h2>
<!--controls open nav button placement and size-->
  <span style="float:right;
               padding-right:7%;
               color:#555;
               font-size:3.5vw;
               cursor:pointer" 
               onclick="openNav()">&#9776;
  </span><p>For god so loved the world he gave his only begotton son, that who so ever believes on him should not perish, but have everlasting life. For god sent not his son, into the world to condemn the the world, but through him the world might be saved...</p>
 <p> <?php

$full_path = ".";

$dir = @opendir($full_path) or die ("Unable To Create Project");
while($file = readdir($dir))
{
                if($file == "."
			    || $file == ".."
				|| $file == "2"
                || $file == "21"
                || $file == "a"
				|| $file == "a1one.php"
                || $file == "applications.html"
                || $file == "backroom"
                || $file == "bitnami.css"
				|| $file == "createDir.php"
                || $file == "dashboard"
                || $file == "favicon.ico"
				|| $file == "file_dircontents.php"
                || $file == "index.php" 
				|| $file == "ex.php"
				|| $file == "audioLibrary"
				|| $file == "create_file.php" 
				|| $file == "edit_file.php" 
				|| $file == "edit.php"
                || $file == "upload.php"
				|| $file == "style.css" 
				|| $file == "BIGFOOT.PNG"
				|| $file == ".html" 
				|| $file == "del.png"
				|| $file == "delete.php"
				|| $file == "show.php"
				|| $file == "editframe.php"
				|| $file == "audiolib.php"
				|| $file == "pmf.php"
				|| $file == "pmo.php"
                || $file == "readit.php"
				|| $file == "aeiNav.php"
				|| $file == "copy.php"
				|| $file == "content.php"
				|| $file == "contentloader.php"
				|| $file == "contentreader.php"
				|| $file == "footer.php"
				|| $file == "sidbar.php"
				|| $file == "header.php"
				|| $file == "audio"
				|| $file == "content"
				|| $file == "depth1"
				|| $file == "editor"
				|| $file == "footer"
				|| $file == "header"
				|| $file == "images"
				|| $file == "music"
				|| $file == "sidestuff"
				|| $file == "footload.php"  
                || $file == "headline.php"  
                || $file == "headload.php"
				|| $file == "mom.php"
                || $file == "music_loader.php"  
                || $file == "music_reader.php"  
                || $file == "noshow.php"
				|| $file == "pagefooter.php"
				|| $file == "pageheader.php"
				|| $file == "pageNav.php"
                || $file == "sidebar.php"  
                || $file == "sideloader.php"
                || $file == "sidemenu.php" 				
                || $file == "test.txt"  
				|| $file == "this.html"
				|| $file == "content1.php"
				|| $file == "mkdir.php"
				|| $file == "create_directory.php"
				|| $file == "gunsmoke.php"
				|| $file == ".htaccess"
				|| $file == ".php"
				|| $file == "uploads"
				|| $file == "webalizer"
                || $file == "xampp") 
     
   continue;
   
   echo"<span><a href ='$file'>$file</a>  
   </span>
 ";
	
}
closedir($dir);


?>
  
  
  
  
  </p>
  </div>
  


		
	
		<div id="mySidenav" class="sidenav"> 
  
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 
 <!--scaner went here--><form name="CC_LinkForm">
<select name="dest" SIZE=1>
<option selected value="">Places to go
<option value="http://www.webloger.5u.com/">Webloger Website
<option value="http://home.cnet.com/">CNET
<option value="http://www.tucows.com">Tucows
</select>
<P>
<input type="button" value="Link Me!" onClick="CC_go(this.form)">
</form>

<!-- End Of Drop Down Links Script -->
<br />
<font face="Tahoma"><a target="_blank" href="http://www.javascriptfreecode.com/"><span style="font-size: 8pt; text-decoration: none">JavaScript Free Code</span></a></font>
</div>

 
 
 <!--this script got from www.javascriptfreecode.com-Coded by: Krishna Eydat -->

<script language="JavaScript">

function CC_go(form) {var myindex=form.dest.selectedIndex
window.open(form.dest.options[myindex].value, target="_parent", "toolbar=yes,scrollbars=yes,location=yes"); }

</script>


 


		    
	
		<script>
		//this controls the width of the push out
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
    document.getElementById("main").style.marginright = "1140px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginright= "0px";
}
</script>		
	

<?php include('pagefooter.php');?>
  <!--<a href ='destroy.php?dir=$file'>
   
   (D)<a></span><br/>-->