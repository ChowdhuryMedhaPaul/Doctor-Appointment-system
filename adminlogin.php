
  <?php
  session_start();
  ?>
<!DOCTYPE html>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  width: 100%;
  background-color: #156ee2;
}

li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

.active a{
  background-color: #;
}
</style>
  <head>
    
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="adminstyle.css">
  </head>
  
  <body>
 <ul>
  <li><a class="active" href="viewdoctorlist.php"> Search Doctor Modules </a></li>

  <li><a href="userlogin.php">Search Patients details</a></li>
   
</ul>

<div class="login">
  <h1>Admin Login</h1>

  <form  action="login.php" method="post">
  <!--<div class="id">
    <input type="text" placeholder="id">
  </div> !-->
  <div class="user">
    <input type="text" placeholder="username" name="un">
  </div>
  <div class="pass">
    <input type="password" placeholder="Password" name="pw">
  </div>

  <input type="submit" class="btn" value="Log in" name="save">
</div>
</form>

  </body>
</html>