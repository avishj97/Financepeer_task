<?php

include('connect.php');

session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['uname'];
      $mypassword = $_POST['pass']; 
      
      
      $sql = "SELECT Email_ID FROM user_details WHERE Email_ID = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($connect,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      
      if($count == 1) {      
         $_SESSION['user']=$myusername;
            
         header("location: home.php");
      }else {
         ?>
         <script type="text/javascript">
            window.alert("Your Login Name or Password is invalid!!");
         </script>
         <?php
      }
   }

?>


<!DOCTYPE html>

<html>
<head>
   <title>Group Chat</title>
   <style type="text/css">
      input[type="text"]:valid,
      input[type="email"]:valid,
      input[type="password"]:valid{
         background-color: white;
         color: black;
      }
      input[type="email"]:invalid:not(:placeholder-shown) ~ .requirements{
         margin-top: 5px;
         max-height: 200px;
         padding: 5px 30px 5px 50px;
         border-top: 1px dashed #aaa;
         background-color: whitesmoke;
      }
      input[type="password"]:invalid:not(:placeholder-shown) ~ .requirements{
         margin-top: 5px;
         max-height: 200px;
         padding: 5px 30px 5px 50px;
         border-top: 1px dashed #aaa;
         background-color: whitesmoke;
      }
      .requirements {
         padding: 0 30px 0 50px;
         color: #C73030;
         max-height: 0;
         transition: 0.28s;
         overflow: hidden;
         font-style: italic;
         font-size: 0.8em;
      }
      .box{
         margin-top: 125px;
         margin-left: 1000px;
         position: absolute;
         
         height: 460px;
         width: 360px;
         border-radius: 10px;
         padding: 20px;
         overflow: hidden;
         float: right;
         background-color: white;
      }
      .box:hover{
         box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
      }
      .button-box{
         width: 220px;
         margin: 35px auto;
         position: relative;
         background-color: white;
         border-radius: 30px;
         box-shadow: 0 0 20px 5px #ffccf2;

      }
      .toggle{
         background: transparent;
         padding: 10px 30px;
         cursor: pointer;
         border: 0;
         outline: none;
         position: relative;
         font-family: "Brelin sans";
         font-weight: bold;
         font-size: 15px;
      }
      #btn{
         top: 0;
         left: 0;
         position: absolute;
         width: 110px;
         height: 100%;
         border-radius: 30px;
         background: linear-gradient(to right, #8080ff, #ff66d9);
         transition: .5%;
      }
      .formlr{
         position: absolute;
         width: 280px;
         transition: .5%;
         margin-left: 40px;
      }
      .input-field{
         width: 100%;
         border-top: 0;
         border-left: 0;
         border-right: 0;
         border-bottom: 1px solid black;
         outline: none;
         padding: 10px 0;
         margin: 5px 0;
         font-size: 20px;
         background: transparent;
      }
      .submit-btn{
         width: 180px;
         border-radius: 30px;
         background: linear-gradient(to right, #8080ff, #ff66d9);
         transition: .5%;
         outline: none;
         border: 0;
         height: 45px;
         padding: 10px 10px;
         margin: auto;
         cursor: pointer;
         font-family: "Brelin sans";
         font-weight: bold;
         font-size: 20px;
      }
      .submit-btn:hover{
         box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
      }
      #login{
         top: 180px;

      }
      #reg{
         top: 130px;
         right: 450px;
      }
      h1{
         font-family: "Bauhaus 93";
         font-size: 100px;
         color: white;
      }
      .title{
         margin-top: 340px;
         margin-left: 150px;
         float: left;
      }
      
   </style>
</head>
<body background="Picture3.png">
<div>
<div class="title">
<h1>
   FINANCEPEER
</h1>
</div>
<div class="box">
   <div class="button-box">
      <div id="btn"></div>
   <button type="button" class="toggle" onclick="login()">Login</button>
   <button type="button" class="toggle" onclick="reg()">Register</button>
   </div>
   <form id="login" class="formlr" method="POST" action="">
      <input type="text" name="uname" class="input-field" placeholder="User id" required="">
      <br><br><br>
      <input type="password" name="pass" class="input-field" placeholder="Password" required="">
      <br><br><br><br>
      <center><input type="submit" name="login-btn" class= "submit-btn" value="Login">
      </center>
   </form>
   <form id="reg" class="formlr" method="POST" action="register.php">
      <input type="text" name="fname" class="input-field" placeholder="First Name" required="">
      <input type="text" name="lname" class="input-field" placeholder="Last Name" required="">
      <input type="email" name="email" class="input-field" placeholder="Email Id" required="">
      <div class="requirements">
         Must be a valid email address.
      </div>
      <input type="password" name="pass" class="input-field" placeholder="Enter a Password" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
      <div class="requirements">
         Your password must be at least 8 characters and must contain at least one uppercase, one lowercase, one number.
      </div>
      <br><br><br>
      <center><input type="submit" name="signup-btn" class= "submit-btn" value="Register"></center>
   </form>
</div>

<script type="text/javascript">
   var a=document.getElementById("login");
   var b=document.getElementById("reg");
   var c=document.getElementById("btn");

   function reg(){
      a.style.left="-450px";
      b.style.left="20px";
      c.style.left="110px";
   }
   function login(){
      a.style.left="20px";
      b.style.left="450px";
      c.style.left="0";
   }
</script>
</div>
</body>
</html>