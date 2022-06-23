<?php
require("connect.php");
//register
if($_SERVER['REQUEST_METHOD']=='POST'){
$sql="INSERT INTO login (username,lname,email,password) values (:username,:lname,:email,:password)";
$statement=$pdo->prepare($sql);
$username=$_POST['username'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];

$statement->bindParam(":username",$username,PDO::PARAM_STR);
$statement->bindParam(":lname",$lname,PDO::PARAM_STR);
$statement->bindParam(":email",$email,PDO::PARAM_STR);
$statement->bindParam(":password",$password,PDO::PARAM_STR);
$statement->execute();

echo "done";

}


?>






<!DOCTYPE html>
<html>
<head>
<title>  Formal Form</title>

<link rel="icon" href="Form.png" type="image/png" size="100
*100">
<link rel="stylesheet" href="sgin.css">

</head>

<body>
<section>
    <h1> Create Account</h1>
   <hr>
    <form>
       
        <label for="Fname">First Name</label>
        <input class="input1" type="text" id="Fname" name="Fname" placeholder="First Name">
        <br>
        <label for="Lname">Last Name</label>
        <input class="input2" type="text" id="Lname" name="Lname" placeholder="Last Name">
        <br>
        <label for="gender"> Gender </label>
        <input class="input3" type="radio" id="male" name="gender" value="male"> male
        <input  class="input3"type="radio" id="female" name="gender" value="female"> female
        <br>

        <label for="email"> Email </label>
        <input class="input5" type="email" id="email" name="email">
        <br>

        <label for="password"> Password </label>
        <input class="input6" type="password" id="password" name="password">
        <br>

        <label for="Governorate"> The City </label>
        <input class="input7" list="Governorate">
        <datalist id="Governorate">
        
        <option value="Amman"></option>
        <option value="Irbid"></option>
        <option value="Zarqa"></option>
        <option value="Mafraq"></option>
        <option value="Ajloun"></option>
        <option value="Jerash"></option>
        <option value="Madaba"></option>
        <option value="Balqa"></option>
        <option value="Karak"></option>
        <option value="Tafileh"></option>
        <option value="Ma'an"></option>
        <option value="Aqaba"></option>
        </datalist>
        <br>
        <input type=checkbox id="confirm" name="confirm" value="confirmed"> I accept all the terms and instructions
        <br>
        <!--<input class="input10" type="submit">-->
        <a>
            <button> Sgin in</button>
        </a>
        </form>

    </section>
        
        </body>
        </html>
























</body>
