<?php
    require("config/dbconnect.php");
    if(isset($_POST["sub-btn"])){
      session_start();
      $name = $_POST['username'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      $res = mysqli_query($connection,"Insert into User(name,email,password) values ('$name','$email','$password')");
      if(!$res ){
        die("$res");
      }
      else{
        $g = mysqli_query($connection,"Select * from User where email='$email'");
        $gg = mysqli_fetch_array($g);
        $_SESSION['logged-in'] = true;
        $_SESSION['user-data']['username'] = $gg['name'];
        $_SESSION['user-data']['email'] = $gg['email'];
        $_SESSION['user-data']['id'] = $gg['id'];
        $_SESSION['user-data']['joinedAt'] = $gg['joinedAt'];
        header("location: index.php");
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SCS Register</title>
  <style>
   * {
  margin: 0;

  padding: 0;
  box-sizing: border-box;
}
body {
  background-color: #0b1416;
  font-family: Arial, Helvetica, sans-serif;
}
.container {
  background-color: #1a282d;
  width: 400px;
  height: 450px;
  position: absolute;
  margin: auto;
  top: 10%;
  left: 0;
  bottom: 0;
  right: 0;
  border-radius: 10px;
  transition: ease-out;
  animation-duration: 5s;
} 
.content {
  width: 78%;
  position: absolute;
  margin: auto;
  margin-top: 5px;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  text-align: center;
}
 
.img1{
  width: 70px;
  position: relative;
  top: 20px;
}
.header {
  font-size: 32px;
  font-weight: 700;
  margin-top: 20px;
  margin-bottom: 10px;
  line-height: 46px;
  color: rgba(241, 247, 247, 0.74);
}
.detail {
  width: 100%;
  height: 48px;
  margin: 5px;
  margin-top: 20px;
  padding: 15px;
  font-size: 15px;
  color: white;
  border-radius: 30px;
  background-color: #25363d;
  border: none;
  
}
.detail:focus {
  box-shadow: 0px -2px 2px -1px #ff4500,
    0px 2px 2px -1px #ff4500,
    2px 0px 2px -1px #ff4500,
    -2px 0px 2px -1px #ff4500;
  outline: none;
}

.btn {
  width: 100%;
  height: 40px;
  border: hidden;
  border-radius: 20px;
  font-size: 18px;
  margin: 5px 0px;
}

.int {
  background-color: #f30d19;
  margin: 10px 0px;
  color: white;
  font-size: 16px;
  font-weight: 700;
  cursor: pointer;
}
.int:hover{
  background-color: #df0812;
}

.or {
  font-size: 15px;
  font-weight: 700;
  margin: 10px 0px;
}

.fbk {
  background-color: rgb(199, 205, 211);
  margin: 5px 0px;
  font-size: 16px;
  font-weight: 700;
}
.fbk a {
  text-decoration: none;
  color: white;
  text-align: center;
  letter-spacing: 1px;
}

.but{
  background-color: #ff6313;
  margin: 10px 0px;
  color: white;
  font-size: 16px;
  font-weight: 700;
  cursor: pointer;
  width: 100%;
  height: 48px;
  margin: 5px;
  margin-top: 25px;
  padding: 15px;
  font-size: 15px;
  color: rgb(239, 236, 236);
  border: none;
  border-radius: 30px;
  
}
.but:hover
{background-color: #e1451e;}

hr {
  width: 50%;
  opacity: 0.4;
  margin-left: 25%;
}
.login-link{
  margin-top: 20px;
  color: white;
}
.login-link a{
  color: #ff4500;
  text-decoration: none;
}
  </style>
</head>
<body>
  <body>
    
    <div class="container">
          <div class="content">
            <p class="header">Register </p>
          <form action="" method="post">
            <input type="text" name="username" placeholder="Username" class="detail" required/><br />
            <input type="email" name="email" placeholder="Email" class="detail" required/><br />
            <input type="password" name="password" placeholder="Password" class="detail" required/><br>
            <input type="submit" class="but" name="sub-btn" value="Register Account" />
         </form> 
            <p class="login-link">Already have an account? <a href="login.php">Log in</button></a></p>
            </div>
        </div>
        
    <!-- partial -->
</body>
</html>