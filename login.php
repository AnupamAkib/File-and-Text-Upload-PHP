<style type="text/css">
.login{
	background:#dadada;
	padding:20px;
	margin:0% 30% 5% 30%;
	font-family: 'Muli', sans-serif;
	box-shadow:0 0 5px rgba(0,0,0,0.7);
}

.inp{
	outline:none;
	width:100%;
	padding:10px;
	font-family: 'Muli', sans-serif;
	font-size:large;
	margin-top:-1px;
	border:1px solid black;
}
.submit_btn{
	border-radius:3px;
	padding:10px;
	border:0px;
	background:#0070c0;
	color:white;
	font-size:large; font-weight:bold;
	font-family: 'Roboto Slab', serif;
	width:100%; margin-top:5px;
}
.submit_btn:hover{
box-shadow:0 0 5px rgba(0,0,0,0.7);
}
.sss{
	border-radius:3px;
	padding:10px;
	border:1px solid black;
	background:#fff;
	color:black;
	font-size:large;
    font-family: 'Muli', sans-serif;
	width:100%; margin-top:5px;
}
</style>


<?php
include "header.html";
?>
<br><br><br><br>

<center>
<h1 style="font-family: 'Roboto Slab', serif;" id="hhh">Login to Access Uploaded Files</h1>
</center>

<font id="vanish"><div class="login">
<b>Enter User Name & Password</b><br><br>
<form method="POST" autocomplete="off">
<input name="username" style="border-radius:7px 7px 0px 0px;" type="text" class="inp" placeholder="User Name" value="akib" required/><br>
<input name="pass" style="border-radius:0px 0px 7px 7px;" type="password" class="inp" placeholder="Password" required/><br>
<select name="ftype" class="sss" required><option value="texts">Get Saved Texts/Codes</option><option value="files">Get Uploaded Files</option></select><br>
<input name="submit" type="submit" class="submit_btn" value="LOGIN"/>
</form>
</div></font>

<?php
if(isset($_POST['submit'])){

if($_POST['username']=="akib" && $_POST['pass']=="1234" && $_POST['ftype']=="files"){
	include "filelist.html";
	
	echo "
	<script>
	document.getElementById('qw').innerHTML='LOGOUT';
	document.getElementById('vanish').innerHTML=' ';
	document.getElementById('hhh').innerHTML='Uploaded file list';
	
	</script>
	";
}
else if($_POST['username']=="akib" && $_POST['pass']=="1234" && $_POST['ftype']=="texts"){
	include "textlist.html";
	echo "
	<script>
	document.getElementById('qw').innerHTML='LOGOUT';
	document.getElementById('vanish').innerHTML=' ';
	document.getElementById('hhh').innerHTML='Uploaded Texts/Codes list';
	
	</script>
	";
}
else{
	echo "<center><font size='5' color='red'>Sorry, Your entired information is wrong!</font></center>";
}
}
?>

</table></div></center><br><br>
<?php
include "footer.html";
?>



