<!DOCTYPE html>
<html>
<head>
	<title>View page </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/conflict-detection.min.js" integrity="sha256-vWyx9G/vjBdyP+7cJX+ixOo8lSK4ql3LCCCkGY8GM6M=" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	
<style type="text/css">
</style>
</head>
<body>

	<div class="container">
    <h2>view records</h2>
    <a  class="btn btn-primary" href="register.php">add new</a>
     
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>Email</th>
        <th>phone</th>
        <th>address</th>

        <th colspan="3">operation</th>

       </tr>
     </thead>
    <tbody>

     
     <?php

  include'connection.php';

  $select ="SELECT *FROM course";
  $query =mysqli_query($con,$select);

while($record=mysqli_fetch_assoc($query)){

    ?>

      <tr>
        <td> <?php  echo  $record['id'];?>      </td>

           <td> <?php  echo  $record['name'];?>      </td>

           <td> <?php  echo $record['email'];?>     </td>

          <td> <?php  echo $record['phone'];?>     </td>

           <td> <?php  echo $record['address'];?>  </td>


           <td> <a href="view.php?id=<?php echo $record['id'];?>" >view</a></td>

           <td> <a href="update.php?id=<?php echo $record['id'];?>" >update</a></td>

          <td> <a href="delete.php?id=<?php echo  $record['id'];?>">delete
         </a> </td>


          </tr>
      <?php
      }
      ?>


 </tbody>
</table>
</body>
</html>