<link href="https://fonts.googleapis.com/css?family=Muli|Roboto+Slab" rel="stylesheet"> 


<?php
include 'header.html';
?>


<br><br><br><br>

<style>
.upload_body{
	background:#dadada;
	padding:20px;
	margin:0% 25% 5% 25%;
	font-family: 'Muli', sans-serif;
	box-shadow:0 0 5px rgba(0,0,0,0.7);
}
.txt{
	outline:none;
	width:100%;
	padding:10px;
	font-family: 'Muli', sans-serif;
	font-size:large;
	margin-top:-6px;
	border:1px solid black;
}
.upbtn{
	border-radius:3px;
	padding:10px;
	border:0px;
	background:#0070c0;
	color:white;
	font-size:large; font-weight:bold;
	font-family: 'Roboto Slab', serif;
	width:100%; margin-top:5px;
}
.upbtn:hover{
box-shadow:0 0 5px rgba(0,0,0,0.7);
}
.upfile{
	border-radius:3px;
	padding:10px;
	border:0px;
	background:;
	color:#000;
	font-size:large; font-style:italic;
	font-family: 'Muli', sans-serif;
	width:100%; margin-top:5px;
}
</style>

<center><br><br>
<?php

date_default_timezone_set('Asia/Dhaka');
if(isset($_POST['submit'])){



$target_dir = "files/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if file already exists
if (file_exists($target_file)) {
    echo "<font style='background:red; color:white; font-size:large; padding:10px; font-weight:bold;'>Sorry, The file already exists in this server! Rename the file and try again.</font><br><br>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "php" && $imageFileType != "svg" && $imageFileType != "pdf" && $imageFileType != "ttf" && $imageFileType != "iso" && $imageFileType != "c" && $imageFileType != "py" && $imageFileType != "3gp" && $imageFileType != "mp3" && $imageFileType != "mp4" && $imageFileType != "jar" && $imageFileType != "msi" && $imageFileType != "class" && $imageFileType != "apk" && $imageFileType != "exe" && $imageFileType != "rar" && $imageFileType != "zip" && $imageFileType != "docx" && $imageFileType != "pptx" && $imageFileType != "doc" && $imageFileType != "txt" && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    echo "<font style='background:red; color:white; font-size:large; padding:10px; font-weight:bold;'>Upload unsuccessful. Invalid file. Add [.zip] extension to upload.</font><br><br>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		
        echo "<div style='margin-top:-100px; background:#01d007; color:white; font-size:large; padding:10px;'><br><br>
		The file <i><b>". basename( $_FILES["fileToUpload"]["name"]). "</b></i> has been uploaded successfully.<br>
		Download link: <a style='text-decoration:none; color:darkblue;' href='files/". basename( $_FILES["fileToUpload"]["name"]). "' target='_blank'>http://anupam-akib.herokuapp.com/files/". basename( $_FILES["fileToUpload"]["name"]). "</a>
		</div><br>";
		
		$fp = fopen("filelist.html", "a");
fwrite($fp, "<tr><td name='uptd' align='center'>". date("Y/m/d") ."<br>" . date("h:i:sa", time()) ."</td> <td name='uptd' align='center'><img src='images/saved_file.png' width='20px'><br><b>$imageFileType</b></td> <td name='uptd' width='50%'>$_POST[discription]</td><td align='center' name='uptd'>$_POST[name]</td><td align='center' class='dwnld' name='uptd' style='background: #0070c0'><a style='text-decoration:none; color:white;' href='http://akibsoft.000webhostapp.com/upload/files/". basename( $_FILES["fileToUpload"]["name"]). "' target='_blank'>DOWNLOAD</a></td></tr>");
		
    } else {
		
        echo "<font style='background:red; color:white; font-size:large; padding:10px; font-weight:bold;'>Sorry, there was an error uploading your file.</font>";
    }
}
}
?>



<img src="images/folder-with-file-icon-hi.png" width="120px"/>
<h1 style="font-family: 'Roboto Slab', serif;">Upload a Document or File</h1>

</center>


<div class="upload_body">
<form method="POST" enctype="multipart/form-data" autocomplete="off">
    <b>Select file to upload:<b><br>
    <input class="upfile" type="file" name="fileToUpload" id="fileToUpload" required><br><br>
	<textarea style="border-radius:7px 7px 0px 0px;" class="txt" type="text" name="discription" placeholder="Say something about this file" required></textarea><br>
	<input style="border-radius:0px 0px 7px 7px;" class="txt" type="text" name="name" placeholder="Your Name" value="AKIB" required><br>
	
	
    <input class="upbtn" type="submit" value="UPLOAD FILE" name="submit">
</form>
</div>








<?php
include 'footer.html';
?>



