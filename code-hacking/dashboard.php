<?php
if(isset($_POST['but']))
{
$servername = "localhost";
$username = "id14526125_worryless";
$password = "rahulkumarsinGH1!";
$dbname = "id14526125_rnd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$sql = "INSERT INTO login VALUES ('$email', 'pwd')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: http://rnddev.azurewebsites.net/"); 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login | R&D MOBA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
#grad1 {
  height: 55px;
  background-color: red; /* For browsers that do not support gradients */
  background-image: linear-gradient(to right, yellow, green); /* Standard syntax (must be last) */
}
.button2 {border-radius: 4px;}
</style>
</head>
<body id="grad1">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container">
  <div class="col-sm-3 col-md-6 col-lg-6 ">
    <form class="form-inline" action="" method="POST">
    <div class="form-group">
            <input type="email" class="button form-control" id="email" placeholder="Username/Email Address" name="email">
    </div>
    <div class="form-group">
           <input type="password" class="button form-control" id="pwd" placeholder="Password" name="pwd">
    </div>
    
    <button type="submit" class="button btn btn-default" name="but">Login</button>
  </form>
</div>
<div class="col-sm-3 col-md-6 col-lg-6">
<img src="img.png" />
  </div>
</div>

</body>
</html>
