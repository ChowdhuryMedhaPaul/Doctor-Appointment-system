
<!DOCTYPE html>

  <head>
    
    <title>Patient Registration</title>
    <link rel="stylesheet" type="text/css" href="registrationstyle.css">
  </head>
  
  <body>

<div class="login">
  <h1>Patient registration</h1>

  <form  action="registration.php" method="post">

  <div class="user">
    <input type="text" placeholder="username" name="p_name">
  </div> 
  
  <div class="email">
    <input type="text" placeholder="email" name="p_email" >
  </div>
  <div class="password">
    <input type="password" placeholder="Password" name="password" >
  </div>
  <input  type="submit" class="btn" value="signup" name="signup">

  <p>
    already register or <a href="userlogin.php">Sign in</a>
</p>
<a href="adminlogin.php">Click To main pages </a>

</form>
</div>

  </body>
</html>


<?php
   include('connection.php');
   if(isset($_POST['signup'])){
     $p_name = $_POST['p_name'];
     $p_email = $_POST['p_email'];
      $password=$_POST['password'];
      $query= "INSERT into patient (p_name, p_email, password) values ('$p_name','$p_email','$password')";
      if(mysqli_query($connect,$query)){

       echo "register successfully";
      }

   }
  ?>