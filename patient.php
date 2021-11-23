 <?php
 session_start();
 $_SESSION;
   
  ?>

<html>
    <title>Patients Views</title>
    <head>
        <link rel="stylesheet"  type="text/css" href="patientstyle.css">
    </head>
    <header>
        <h5 class="hearder">Patient Appointment System</h5>
        <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #156ee2;
}

li {
  float: left;
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
 <body>
    <ul>
        <br><br>
        <li><a href="bookingapp.php">Booking Appointment</a></li> 
        <li><a href="deleteapp.php"> Delete Appointment</a></li>
        <li><a href="updateapp.php">Update Appointment</a></li> 
        <li><a href="viewbooking.php">view Booking Appointments</a></li>
     </ul>
     <br>
	 <a href="userlogout.php"> logout</a>
</body>
      </header> 
</html>