<?php

$filename=$_POST['filename'];

$con=mysqli_connect('127.0.0.1','root','');
if(!$con)
	echo nl2br("CONNECTION NOT MADE!!");
else
{
	if(!mysqli_select_db($con,'sample'))
		{
			echo nl2br("DB NOT SELECTED");
		}
	else
		{
			
			$sql="UPDATE file_name SET state='UNSAFE' where filename LIKE '%$filename%';";
			
			if(!mysqli_query($con,$sql))
				echo nl2br("NOT INSERTED");
			else
				echo nl2br("::  INSERTED");
		}
}
header("refresh:1,url=tagger.php");

?>