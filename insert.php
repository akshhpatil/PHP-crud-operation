<?php
include 'connection.php';

if(isset($_POST['submit'])){

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];

$insert="INSERT INTO course(name, email, phone, address)VALUES
('$name','$email','$phone','$address')";

$query=mysqli_query($con,$insert);

if ($query){
            header("Location:dash.php");
           } 
      else {
           echo "failed: " . $con->error;
           }    
         
}
?>