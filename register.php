<?php

include('connect.php');

session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myfname = $_POST['fname'];
      $mylname = $_POST['lname'];
      $myemail = $_POST['email'];
      $mypassword = $_POST['pass']; 
      
      $sql = "INSERT into user_details values('$myfname','$mylname','$myemail','$mypassword')";
    
      $result = mysqli_query($connect,$sql) or die("Invalid!!");
      
      header("location: index.php");
      
   }
   ?>