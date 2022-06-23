
<?php
session_start();
require("connect.php");

if(isset($_POST['login'])){
    $sql="SELECT * from login where email=:email and password=:password";
    $statement=$pdo->prepare($sql);
    $email=$_POST['email'];
    $password=$_POST['password'];

    $statement->bindParam(":email",$email,PDO::PARAM_STR);
    $statement->bindParam(":password",$password,PDO::PARAM_STR);
    $statement->execute();
    $count=$statement->rowCount();
    if($count==1){
        $_SESSION['email']=$email;
        header("location:home.php");
    }else{
        echo "Invalid email or password";
    }
    $pdo=null;

}


?>



















<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Login</title>
    <link rel="stylesheet" href="login.css" />
    
  </head>

  <body>
    <div class="reg-container"> 

        <form action="">
        <h3>Login</h3>
         <hr>
         <br>

          <label for="username"> <b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username"  required>
          
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password"  > 

          <button type="submit" name="login">Login </button>
          <br>

          <h2> Don"t have an account?</h2> 
         </br>

         <div class="pa">
          
          <a href="sign.html"target="_blank"> <li class="Sign">Sign In</li> </a>
          
         </div>

        </form>
  </body>
  </html>
