
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }

}
 



</style>
</head>
<body>

 
 

 
  
      <div class="imgcontainer">
      

      <img src="https://upload.wikimedia.org/wikipedia/en/thumb/2/20/Harcourt_Butler_Technical_University_Logo_SSH.png/220px-Harcourt_Butler_Technical_University_Logo_SSH.png" style="width: 100px" alt="Avatar" class="avatar">
    </div>
    <center><h2 style="font-family: alzebrian"><i><b>Log-in</b></i></h2></center>
<form method="post" action="login.php">
    <div class="container"  id="user">
      <label for="uname"><b>Email :</b></label>
      <input type="text" placeholder="Enter email" name="email" required style="border-radius: 100px ;x">

      <label for="psw"><b>Password :</b></label>
      <input type="password" placeholder="Enter Password" name="password" required  style="border-radius: 100px; margin-bottom: 30px" >
        <center> 
      <button type="submit" name="login"  style="border-radius: 100px ; width: 40% ; margin-bottom: 30px" >Login</button></center>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1" >
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

 

</body>
</html>
















<?php

 
$conn = mysqli_connect("localhost", "root","", "sign-up"); 
if(isset($_POST["login"])){

$email =  $_POST["email"];
      $password = $_POST["password"]; 
      
      $query ="SELECT * FROM `sundaram` where (email='$email' and password='$password') ";
      $result = mysqli_query($conn,$query);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //  $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo "no login for u";
      }
}















/*$email = mysqli_real_escape_string($conn,$_POST["email"]);
        $password = mysqli_real_escape_string($conn,$_POST["password"]);
        $strSQL = mysqli_query($conn,"SELECT 'email' FROM `sundaram` where email='".$email."' and password='".md5($password)."'");

        if($strSQL){
        	echo "true....its working/n";
        }else{
        	echo "sarthak is here so how it could be right";
        }

        $Results = mysqli_fetch_array($strSQL);
        if($Results && count($Results)>=1)
        {
            $message = $Results["email"]." Login Sucessfully!!";
        }
        else
        {
            $message = "Invalid email or password!!";
        } 
        echo "$message";     
}*/


?>