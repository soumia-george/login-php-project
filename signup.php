
<?php include("connect.php");
session_start();
if(isset($_POST['submit'])){
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];

   $sql = "SELECT * FROM signup WHERE username = '$username'";
   $result = mysqli_query($conn,$sql);
   $num = mysqli_num_rows($result);

   if($num>0){
      echo "<script>alert('username already exist')</script>";

   }
   else{
      $sql = "INSERT INTO signup (username,email,password) VALUES ('$username','$email','$password')";
      mysqli_query($conn,$sql);
      header("location:index.php");
   }
}

?>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form action="" method="POST">
      <label>Name</label>
      <input type="text" name="username" required><br>
      <label>email</label>
      <input type="email" name="email" required><br>
      <label>password</label>
      <input type="password" name="password" required><br>
      <input type="submit" name="submit" value="Submit">
      <a href="login.php">Login</a>
   </form>

</body>
</html>