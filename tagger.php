
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
			$sql="SELECT * from current_file;";
			$result = mysqli_query($con,$sql);
			$row = mysqli_fetch_array($result);
			$sql="select filename from file_name where rfid LIKE '%$row[0]%';";
			$result1 = mysqli_query($con,$sql);
			$filename = mysqli_fetch_array($result1);
		}
}
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Signup / Registration form using Material Design - Demo by W3lessons</title>
  <!-- CORE CSS-->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
<style type="text/css">
html,
body {
    height: 100%;
}
html {
    display: table;
    margin: auto;
}
body {
    display: table-cell;
    vertical-align: middle;
}
.margin {
  margin: 0 !important;
}
</style>
<style>
div.ex1 {
    max-width:500px;
    margin: auto;
    
}
ul {
    list-style-type: none;
    margin: 50;
    padding: 150;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 25px 190px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
<style>
body, html {
    height: 100%;
}

.bg { 
    /* The image used */
    background-image: url("back.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<style>
.container.active .card.alt .input-container

.container.active .card.alt .input-container {
  -webkit-transition-delay: .4s;
          transition-delay: .4s;
}
.container.active .card.alt .input-container:nth-child(2) {
  -webkit-transition-delay: .5s;
          transition-delay: .5s;
}
.container.active .card.alt .input-container:nth-child(3) {
  -webkit-transition-delay: .6s;
          transition-delay: .6s;
}

.card .input-container {
  position: relative;
  margin: 0 60px 50px;
}
.card .input-container input {
  outline: none;
  z-index: 1;
  position: relative;
  background: none;
  width: 100%;
  height: 60px;
  border: 0;
  color: #212121;
  font-size: 24px;
  font-weight: 400;
}
.card .input-container input:focus ~ label {
  color: #9d9d9d;
  -webkit-transform: translate(-12%, -50%) scale(0.75);
          transform: translate(-12%, -50%) scale(0.75);
}
.card .input-container input:focus ~ .bar:before, .card .input-container input:focus ~ .bar:after {
  width: 50%;
}
.card .input-container input:valid ~ label {
  color: #9d9d9d;
  -webkit-transform: translate(-12%, -50%) scale(0.75);
          transform: translate(-12%, -50%) scale(0.75);
}
.card .input-container label {
  position: absolute;
  top: 0;
  left: 0;
  color: #757575;
  font-size: 24px;
  font-weight: 300;
  line-height: 60px;
  -webkit-transition: 0.2s ease;
  transition: 0.2s ease;
}
.card .input-container .bar {
  position: absolute;
  left: 0;
  bottom: 0;
  background: #757575;
  width: 100%;
  height: 1px;
}
.card .input-container .bar:before, .card .input-container .bar:after {
  content: '';
  position: absolute;
  background: #ed2553;
  width: 0;
  height: 2px;
  -webkit-transition: .2s ease;
  transition: .2s ease;
}
.card .input-container .bar:before {
  left: 50%;
}
.card .input-container .bar:after {
  right: 50%;
}


.card.alt .input-container input {
  color: #ffffff;
}
.card.alt .input-container input:focus ~ label {
  color: #ffffff;
}
.card.alt .input-container input:focus ~ .bar:before, .card.alt .input-container input:focus ~ .bar:after {
  background: #ffffff;
}
.card.alt .input-container input:valid ~ label {
  color: #ffffff;
}
.card.alt .input-container label {
  color: rgba(255, 255, 255, 0.8);
}
.card.alt .input-container .bar {
  background: rgba(255, 255, 255, 0.8);
}
</style>
</head>
<body >
<div class="bg">

<ul>
  <li><a class="active" href="tagger.php">TAG FILE HERE</a></li>
  <li><a href="emergency.html">EMERGENCY FILE ALERT</a></li>
</ul>
</br>
</br>

<div class="ex1">
<div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
      
        <div class="row">
          <div class="input-field col s12 center">
			<h4 style="text-align:center"><?php echo "$filename[0]" ?></h4>
            
            <p class="center login-form-text">Enter information only if it affects normal workflow</p>
          </div>
        </div>
		<div>
        <form action="process.php" method="post">  
<div>
    <label for="status"><h5>Status ::</h5></label>
	
    <select name="status" id="status" style="max-width:90%;max-height:90%;">
    <option value="inprogress">In_progress</option>
    <option value="held">Held</option>
	<option value="forwarded">Forwarded</option>
  </select>
</div>
  
  
  </br>
  </br>
	<div>
      <label for="dest"><h5>Next location ::</h5></label>
      <select name="destination" id="dest">
		<option value="table1">Table_1</option>
		<option value="table2">Table_2</option>
		<option value="table3">Table_3</option>
		<option value="table4">Table_4</option>
		<option value="table5">Table_5</option>
		<option value="table6">Table_6</option>
	  </select>
    </div>
	</br>
	</br>
</br>
   
 
        </div>
        
          <div class="row">
          <div class="input-field col s12">
            <input type="submit" class="btn waves-effect waves-light col s12" value="Tag this file now">
          </div>
          </div>
		   </form>
		   <div class="row">
          <div class="input-field col s12">
            <a href="#"><input type="button" class="btn waves-effect waves-light col s12" style="width:150px" value="PREVIOUS"></a>
			<a href="#"><input type="button" class="btn waves-effect waves-light col s12" style="width:150px; margin-left:155px" align="right" value="NEXT"></a>
          </div>
          </div>
      
    </div>
  </div>
  </div>
  </div>
</body>
</html>