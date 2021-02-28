<?php
include'connection.php'; 

$id=$_GET['id'];

$delete= "DELETE FROM course WHERE id=$id";
$query=mysqli_query($con,$delete);

$record=mysqli_fetch_assoc($query);

if ($query) {
  header("Location:dash.php");
} else {
  echo "failed: " . $con->error;
}

$con->close();
?>

