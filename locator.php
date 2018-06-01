
<?php

$filename=$_POST["rfid"];
	
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
			$sql="select * from file_name where filename='$filename';";
			$result1=mysqli_query($con,$sql);
			$row1=mysqli_fetch_array($result1);
			$sql="select * from rfid where rfid='$row1[0]';";
			$result=mysqli_query($con,$sql);
			$row=mysqli_fetch_array($result);
			$a=$row[0];
		}
}
?>

<html>
<head>
<title>PHP</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  
</head>
<body>
	<!--<h1 style="text-align:center">INFORMATION OF THE FILE</h1>
	<table border="border">
	<tr>
		<th>RFID</th>
		<th></th>
		<th>LOCATION</th>
		<th></th>
		<th>STATUS</th>
		<th></th>
		<th>DATE</th>
	</tr>
	<tr>
		<td><?php echo "$row[0]" ?></td>
		<th></th>
		<td><?php echo "$row[1]" ?></td>
		<th></th>
		<td><?php echo "$row[2]" ?></td>
		<th></th>
		<td><?php echo "$row[3]" ?></td>
	</tr>
	</table>-->
	
	<!-- <button type="button" align="center" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" >SHOW DATA</button> -->

  <!-- Modal -->
  
  <div  id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">
          <p>RFID VALUE :: <?php echo "$row[0]" ?></p>
		  <p>LOCATION :: <?php echo "$row[1]" ?></p>
		  <p>STATUS :: <?php echo "$row[2]" ?></p>
		  <p>DESTINATION :: <?php echo "$row[3]" ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</body>
</html>