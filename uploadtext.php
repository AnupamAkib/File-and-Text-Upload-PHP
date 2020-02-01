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

$fp = fopen("textlist.html", "a");
fwrite($fp, "<div class='txtbody'><input typr='text' class='txt_title' value='$_POST[title]'><br>Uploaded by<b> $_POST[name] </b>at ". date("Y/m/d") ." " . date("h:i:sa", time()) ."<br><textarea class='codearea'>$_POST[discription]</textarea></div>");
	
if (fopen("textlist.html", "a")){
	echo "<div style='margin-top:-100px; background:#01d007; color:white; font-size:large; padding:10px;'><br><br>
	Your text '<b>$_POST[title]</b>' has been uploaded to the server successfully
		</div><br>";
		
	
}	

}
?>




<img src="images/Picture1.png" width="100px"/>

<h1 style="font-family: 'Roboto Slab', serif;">Upload a TEXT directly</h1>

</center>



<div class="upload_body">
<form method="POST" enctype="multipart/form-data" autocomplete="off">
    <b>Enter those information:</b><br><br>
	<input style="border-radius:7px 7px 0px 0px;" class="txt" type="text" name="title" placeholder="Title" required><br>
	<textarea style="border-radius:0px 0px 0px 0px;" class="txt" type="text" name="discription" placeholder="Paste/Write your text here" required></textarea><br>
	<input style="border-radius:0px 0px 7px 7px;" class="txt" type="text" name="name" placeholder="Your Name" value="AKIB" required><br>
	
	
    <input class="upbtn" type="submit" value="SAVE TEXT" name="submit">
</form>
</div>








<?php
include 'footer.html';
?>



