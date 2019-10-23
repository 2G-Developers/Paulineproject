<html>
<head>
<title>PHP File Upload example</title>
</head>
<body>
 	<center><h1>FOR CAROUSEL</h1>Upload file less than 2m in jpg format</center>
<form action="fileUpload.php" enctype="multipart/form-data" method="post">
Select image :
<input type="file" name="file"><br/>
Password:
<input type="text" name="pass"><br/>
<input type="submit" value="Upload" name="Submit1"> <br/>
 
 
</form> 
	<center><h1>FOR EVENTS</h1>Upload file less than 2m in jpg format</center>
<form action="fileUpload.php" enctype="multipart/form-data" method="post">
Select image :
<input type="file" name="file1"><br/>
Caption:
<input type="text" name="cap"><br/>
Password:
<input type="text" name="pass1"><br/>
<input type="submit" value="Upload" name="Submit2"> <br/>
 
 
</form>
<?php

if(isset($_POST['Submit1']))
{ 
	if(strcmp($_POST['pass'],'CVy9bqnTfcpu')===0 )
	{
		$filepath = "./assets/img/carousel/" . $_FILES["file"]["name"];
		echo $_FILES["file"]["name"];
		if( copy($_FILES["file"]["tmp_name"],  $filepath))
		{
			echo " file copied to carousel";
		}
	} 
	else
	{
		echo "INVALID PASS: FILE NOT UPLOADED";
	}

	
} 
if(isset($_POST['Submit2']))
{ 
	if(strcmp($_POST['pass1'],'CVy9bqnTfcpu')===0 )
	{
		
		$filepath = "./assets/img/events/" . $_FILES["file1"]["name"];
		echo $_FILES["file1"]["name"];
		if( copy($_FILES["file1"]["tmp_name"],  $filepath))
		{
			$file_name="./assets/captions/events.txt";
			$fp = fopen($file_name, 'a');//opens file in append mode  
			fwrite($fp, $filepath."~".$_POST['cap']."\n");   
			fclose($fp);  
			 
			echo " file copied to events";
		}
		else{
			echo "FAILED";
		}
	} 
	else
	{
		echo "INVALID PASS: FILE NOT UPLOADED";
	}

	
} 
?>
 
</body>
</html>