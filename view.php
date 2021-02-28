<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body class="body">
<div class="container">
<form id="form_group"  method="POST">

<?php
error_reporting (E_ALL ^ E_NOTICE);

include 'connection.php';
$id=$_GET['id'];
if(isset($_POST['submit'])){
header("location:dash.php");
}

$select ="SELECT * FROM course where id=$id";
$query =mysqli_query($con,$select);
$record=mysqli_fetch_assoc($query);

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];

?>

                        <h1 id="header">Register here</h1>

			Name<input type="text" name="name" value="<?php  
			echo  $record['name'];?>"><br><br>

			email<input type="text" name="email" value="<?php 
			 echo  $record['email'];?>"><br><br>

			phone<input type="phone" name="phone" value="<?php  
			echo  $record['phone'];?>"><br><br>

                        address<input type="text" name="address" value="<?php 
                        echo  $record['address'];?>"><br><br>
                        <a  class="btn btn-primary" href="dash.php">Back</a>

</form>
</div>
</body>
</html>

