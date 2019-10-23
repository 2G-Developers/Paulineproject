	
	<center><h1>FOR CAROUSEL</h1>deleted file cannot be recovered.</center>
	
	<?php $dir ="./assets/img/carousel/*.*" ;
					$images=glob($dir);
					foreach($images as $image):
					echo $image;
					?>
	<form action="delete.php" enctype="multipart/form-data" method="post">
		<img src="<?php echo $image?>" class="d-block w-10" height="30%" alt="...">
					<a href='delete.php?hello=<?php echo $image?>'></a>
		<input type="text" value="<?php echo $image?>" name="image" hidden>
		Password:
		<input type="text" name="pass">
		<input type="submit" value="Delete" name="Submit1"> <br/>
	 
	 
	</form>
					
					</br>
					</br>
					</br>
					<?php
					endforeach;
					?>
						<center><h1>FOR EVENTS</h1>deleted file cannot be recovered.</center>

	<?php $dir ="./assets/img/events/*.*" ;
					$images=glob($dir);
					foreach($images as $image): 
					echo $image;
					?>
	<form action="delete.php" enctype="multipart/form-data" method="post">
		<img src="<?php echo $image?>" class="d-block w-10" height="30%" alt="...">
					<a href='delete.php?hello=<?php echo $image?>'></a>
		<input type="text" value="<?php echo $image?>" name="image" hidden>
		Password:
		<input type="text" name="pass">
		<input type="submit" value="Delete" name="Submit1"> <br/>
	 
	 
	</form>
					
					</br>
					</br>
					</br>
					<?php
					endforeach;
					?>
		<?php  
if(isset($_POST['Submit1']))
{  
	if(strcmp($_POST['pass'],'CVy9bqnTfcpu')===0 )
	{
		 echo 'Delete file';
		 echo $_POST['image'];
	$file=$_POST['image'];
	if (!unlink($file)) {
  echo ("<br>Error deleting $file");
} else {
  echo ("<br>Deleted $file");
   header('Location: delete.php');
	}
	} 
	else
	{
		echo "INVALID PASS: FILE NOT DELETED";
	}

	
} 

?>