<link href="https://fonts.googleapis.com/css?family=Muli|Roboto+Slab" rel="stylesheet"> 


<?php
include 'header.html';
?>




<style type="text/css">
.filetype{

padding:10px 0px 10px 0px;
width:285px; height:250px;
border-radius:30px;
font-family: 'Muli', sans-serif;
border:1px solid darkblue;
transition:0.3s;
}

.filetype:hover{
box-shadow:0 0 15px rgba(0,0,0,1);
padding:10px 0px 10px 0px;
width:285px; height:250px;
border-radius:30px;
font-family: 'Muli', sans-serif;
border:1px solid darkblue;
}


@font-face{
    font-family: titlefont;
    src: url(JosefinSans-Regular.ttf);
}
@font-face{
    font-family: font1;
    src: url(JosefinSans-Regular.ttf);
}
</style>

<center>
<br><br><br><br><br><br>
<h1 style="font-family: 'Roboto Slab', serif;">UPLOAD SOMETHING!</h1>

<table border="0" width="50%" cellpadding="10">
<td align="center">
<div class="filetype" style="background: linear-gradient(#8da8db, #2b4c88);" onclick="window.location.href='uploadscr.php'">
<center><font size="5" color="white" style="font-family: 'Roboto Slab', serif;"><b>Documents/Files</b></font><hr color="#000000" size="1"><br>
<img src="images/folder-with-file-icon-hi.png" width="130px"><br><br>
<font style="margin:5px;" color="white" size="4"><b>File Type:</b> docx, pdf, txt, jpg, c, exe, zip, rar, pptx, gif, php etc.</font>
</div>
</td>

<td align="center">
<div class="filetype" style="background: linear-gradient(#977aff, #5906b2);" onclick="window.location.href='uploadtext.php'">
<center><font size="5" color="white" style="font-family: 'Roboto Slab', serif;"><b>Direct Text</b></font><hr color="#000000" size="1"><br>
<img src="images/Picture1.png" width="110px"><br><br>
<font style="margin:5px;" color="white" size="4"><b>File Type:</b> Direct Text file (Pure Text)</font>
</div>
</td>
</table>
<br><br>


<table border="0" width="70%" cellspacing="6" cellpadding="8">
<tr>
<td>
<font style="font-family: 'Roboto Slab', serif; font-size:30; font-weight:bold;">DOCUMENTS OR FILES</font>
</td>
<td>
<font style="font-family: 'Roboto Slab', serif;  font-size:30;  font-weight:bold;">DIRECT TEXT UPLOAD</font>
</td>
</tr><tr>
<td>
<font size="5" style="font-family: 'Muli', sans-serif;">Here you can upload Microsoft Word (docx, doc, pdf), PowerPoint (pptx) and other Image files. You can also upload text file here (.txt). If you have other files to upload then use .zip extension to upload it.
</font></td>


<td><font size="5" style="font-family: 'Muli', sans-serif;">Use this button to store some pure text. To upload a C program, just copy the code and paste it to upload. No need to upload the whole file. You can also upload html codes here
</font>
</td></tr>
</table>
</center>
<br><br><br>
<?php
include 'footer.html';

?>












