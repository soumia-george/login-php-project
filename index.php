
<?php include("connect.php");
session_start();

if(isset($_POST['submit'])){
   $username = $_POST['username'];
   $email = $_pOST['email'];
   $password = $_POST['password'];

   $sql = "SELECT * FROM signup WHERE username = '$username' and  password = '$password'";
   $result = mysqli_query($conn,$sql);
   $num = mysqli_num_rows($result);

   if($num>0){
      $_SESSION['username'] = $username;
      header("location:welcome.php");
   }
   else{
     echo "<script>alert('invalid try')</script>";
    //   $sql = "INSERT INTO signup (username,email,password) VALUES ('$username','$email','$password')";
    //   mysqli_query($conn,$sql);
      
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
   <form action="" name="reg_form" method="POST">
      <label>Name</label>
      <input type="text" name="username"><br>
      <!-- <label>email</label>
      <input type="email" name="email"><br> -->
      <label>password</label>
      <input type="password" name="password"><br>
      <input type="submit" name="submit" value="Submit">
      <a href="signup.php">Sign Up</a>
   </form>

</body>
</html>