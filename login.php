<?php
  session_start();
  if(!isset($_SESSION['user']))
  {
    header('location:adminlogin.php');
  }
  $connect = mysqli_connect("localhost","root","","admin")
  or die("connection failed");
  
  if(!empty($_POST['save']))
  {
    $username=$_POST['un'];
    $password=$_POST['pw'];
    $query = "select * from adminuser where username= '$username' and password='$password'";
    $result = mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
    if($count>0)
   { echo "login Successful"; 
     $_SESSION['user']= $username;
     header('location:adminview.php');
  }
    else 
   { echo "Login Not Successful";
    header('location:adminlogin.php');
   }
  }
  ?>