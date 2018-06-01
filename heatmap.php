<?php

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
			$sql="select * from tables where tablename LIKE '%Table1%';";
			$result=mysqli_query($con,$sql);
			$row1=mysqli_fetch_array($result);
			
			$sql="select * from tables where tablename LIKE '%Table2%';";
			$result=mysqli_query($con,$sql);
			$row2=mysqli_fetch_array($result);
			
			$sql="select * from tables where tablename LIKE '%Table3%';";
			$result=mysqli_query($con,$sql);
			$row3=mysqli_fetch_array($result);
			
			$sql="select * from tables where tablename LIKE '%Table4%';";
			$result=mysqli_query($con,$sql);
			$row4=mysqli_fetch_array($result);
			
			$sql="select * from tables where tablename LIKE '%Table5%';";
			$result=mysqli_query($con,$sql);
			$row5=mysqli_fetch_array($result);
			
			$sql="select * from tables where tablename LIKE '%Table6%';";
			$result=mysqli_query($con,$sql);
			$row6=mysqli_fetch_array($result);
			
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
<body style="background-color:white">
	<h1 style="text-align:center">HEATMAP OF SPOTS</h1>
	<div class="container">            
  <table class="table">
    <thead>
      <tr>
        <th>TABLE ID</th>
		
		<th>NAME</th>
		
		<th>OWNER</th>
		
		<th>FILES CURRENTLY AVAILABLE</th>
		
		<th>HEATMAP</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo "$row1[0]" ?></td>
		
		<td><?php echo "$row1[1]" ?></td>
		
		<td><?php echo "$row1[2]" ?></td>
		
		<td><?php echo "$row1[3]" ?></td>
		
		<td><img src="red.png"></td>
      </tr>
      <tr>
        <td><?php echo "$row2[0]" ?></td>
		
		<td><?php echo "$row2[1]" ?></td>
		
		<td><?php echo "$row2[2]" ?></td>
		
		<td><?php echo "$row2[3]" ?></td>
		
		<td><img src="red.png"></td>
		
      </tr>
      <tr>
        <td><?php echo "$row3[0]" ?></td>
		
		<td><?php echo "$row3[1]" ?></td>
		
		<td><?php echo "$row3[2]" ?></td>
		
		<td><?php echo "$row3[3]" ?></td>
		
		<td><img src="yellow.jpg"></td>
		
      </tr>
	  <tr>
        <td><?php echo "$row4[0]" ?></td>
		
		<td><?php echo "$row4[1]" ?></td>
		
		<td><?php echo "$row4[2]" ?></td>
		
		<td><?php echo "$row4[3]" ?></td>
		
		<td><img src="red.png"></td>
		
      </tr>
	  <tr>
		<td><?php echo "$row5[0]" ?></td>
		
		<td><?php echo "$row5[1]" ?></td>
		
		<td><?php echo "$row5[2]" ?></td>
		
		<td><?php echo "$row5[3]" ?></td>
		
		<td><img src="yellow.jpg"></td>
		
	  </tr>
	  <tr>
        <td><?php echo "$row6[0]" ?></td>
		
		<td><?php echo "$row6[1]" ?></td>
		
		<td><?php echo "$row6[2]" ?></td>
		
		<td><?php echo "$row6[3]" ?></td>
		
		<td><img src="green.png"></td>
		
      </tr>
    </tbody>
  </table>
</div>
	<!--<table>
	<tr>
		<th>TABLE ID</th>
		<th></th>
		<th>NAME</th>
		<th></th>
		<th>OWNER</th>
		<th></th>
		<th>FILES CURRENTLY AVAILABLE</th>
		<th></th>
		<th>HEATMAP</th>
	</tr>
	<tr>
		<td><?php echo "$row1[0]" ?></td>
		<th></th>
		<td><?php echo "$row1[1]" ?></td>
		<th></th>
		<td><?php echo "$row1[2]" ?></td>
		<th></th>
		<td><?php echo "$row1[3]" ?></td>
		<th></th>
		<td><img src="red.png"></td>
		<th></th>
		>
	</tr>
	<tr>
		<td><?php echo "$row2[0]" ?></td>
		<th></th>
		<td><?php echo "$row2[1]" ?></td>
		<th></th>
		<td><?php echo "$row2[2]" ?></td>
		<th></th>
		<td><?php echo "$row2[3]" ?></td>
		<th></th>
		<td><img src="red.png"></td>
		<th></th>
		
	</tr>
	<tr>
		<td><?php echo "$row3[0]" ?></td>
		<th></th>
		<td><?php echo "$row3[1]" ?></td>
		<th></th>
		<td><?php echo "$row3[2]" ?></td>
		<th></th>
		<td><?php echo "$row3[3]" ?></td>
		<th></th>
		<td><img src="orange.png"></td>
		<th></th>
		
	</tr>
	<tr>
		<td><?php echo "$row4[0]" ?></td>
		<th></th>
		<td><?php echo "$row4[1]" ?></td>
		<th></th>
		<td><?php echo "$row4[2]" ?></td>
		<th></th>
		<td><?php echo "$row4[3]" ?></td>
		<th></th>
		<td><img src="red.png"></td>
		<th></th>
		
	</tr>
	<tr>
		<td><?php echo "$row5[0]" ?></td>
		<th></th>
		<td><?php echo "$row5[1]" ?></td>
		<th></th>
		<td><?php echo "$row5[2]" ?></td>
		<th></th>
		<td><?php echo "$row5[3]" ?></td>
		<th></th>
		<td><img src="orange.png"></td>
		<th></th>
		
	</tr>
	<tr>
		<td><?php echo "$row6[0]" ?></td>
		<th></th>
		<td><?php echo "$row6[1]" ?></td>
		<th></th>
		<td><?php echo "$row6[2]" ?></td>
		<th></th>
		<td><?php echo "$row6[3]" ?></td>
		<th></th>
		<td><img src="green.png"></td>
		<th></th>
		
	</tr>
	</table>-->
</body>
</html>