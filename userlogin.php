<!DOCTYPE html>

<head>
    
    <title>Patient Login</title>
    <link rel="stylesheet" type="text/css" href="adminstyle.css">
  </head>
  
  <body>
  <div class="login">
  <h1>Patient Login</h1>

  <form  action="userlogin1.php" method="post">
  <div class="user">
    <input type="text" placeholder="username" name="un">
  </div>
  
  <div class="pass">
    <input type="password" placeholder="Password" name="pw">
  </div>

  <input type="submit" class="btn" value="login" name="login">

<p>
    not a member or <a href="registration.php">Sign up</a>
</p>
<a href="adminlogin.php">Click To main pages </a>
</form>

</div>
  </body>
</html>