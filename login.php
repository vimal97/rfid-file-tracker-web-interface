
<?php

$name=$_POST["name"];
$password=$_POST["password"];
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
			$sql="SELECT * from users where name LIKE '%$name%';";
			$result = mysqli_query($con,$sql);
			$row = mysqli_fetch_array($result);
		}
}
	
				if ($name=="$row[0]" and $password=="$row[1]") {
							header("refresh:1 ; url=tagger.php");
							
							}
				else
							{
							header("refresh:1 ; url=index.php");
							
							}
			
		




?>
