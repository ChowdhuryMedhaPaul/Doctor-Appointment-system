<?php
  session_start();
  if(!isset($_SESSION['patient']))
  {
    header('location:userlogin.php');
  }
  $connect = mysqli_connect("localhost","root","","admin")
  or die("connection failed");
  
  if(!empty($_POST['login']))
  {
    $p_name=$_POST['un'];
    $password=$_POST['pw'];
    $query = "SELECT * from patient where p_name= '$p_name' and password='$password'";
    $result = mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
    $ans=mysqli_fetch_array($result);
    if($count>0)
   { echo "login Successful"; 
     $_SESSION['patient']= $p_name;
     $_SESSION['p_id']= $ans['p_id'];
     $_SESSION['p_email']= $ans['p_email'];
     header('location:patient.php');
  }
    else 
   { echo "Login Not Successful";
    header('location:userlogin.php');
   }
  }
  ?>