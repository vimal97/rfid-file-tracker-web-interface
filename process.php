<html>
<title>PHP</title>
<body>
<?php



$status=$_POST["status"];
$destination=$_POST["destination"];	
$con=mysqli_connect('127.0.0.1','root','');
if(!$con)
	echo nl2br("CONNECTION NOT MADE!!");
else
{
	echo nl2br("CONNECTION MADE!!");
	if(!mysqli_select_db($con,'sample'))
		{
			echo nl2br("DB NOT SELECTED");
		}
	else
		{
			$sql="SELECT CURDATE();";
			$result = mysqli_query($con,$sql);
			$row = mysqli_fetch_array($result);
			$sql="select * from current_file;";
			$result=mysqli_query($con,$sql);
			$rfid=mysqli_fetch_array($result);
			$sql="select * from rfid where rfid LIKE '%$rfid[0]%';";
			$result = mysqli_query($con,$sql);
			$row1 = mysqli_fetch_array($result);
			$location="Table2";
			if(!$row1[0])
				$sql="INSERT INTO rfid (rfid,location,status,destination,date)values('$rfid[0]','$location','$status','$destination','$row[0]');";
			else
				$sql="UPDATE rfid SET  status = '$status', location = '$location' ,date='$row[0]',destination='$destination' WHERE rfid LIKE '%$rfid[0]%';";
			if(!mysqli_query($con,$sql))
				echo nl2br("NOT INSERTED");
			else
				echo nl2br("::  INSERTED");
			$sql="TRUNCATE TABLE current_file;";
			$result=mysqli_query($con,$sql);
		}
}
header("refresh:1,url=tagger.php");
?>
</body>
</html>