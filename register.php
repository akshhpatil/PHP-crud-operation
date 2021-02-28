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
<form id="form_group" action="insert.php" method="POST">

<h1 id="header">Register here</h1>

Name<input type="text" name="name"><br><br>

email<input type="text" name="email"><br><br>

phone<input type="phone" name="phone"><br><br>

address<input type="text" name="address"><br><br>

			
<input type="submit" name="submit" class="btn btn-primary">
<input type="reset" name="reset" class="btn btn-danger">

</form>
</div>
</body>
</html>




