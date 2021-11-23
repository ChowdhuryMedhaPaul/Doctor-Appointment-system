
<html>
    <title>Admin Views</title>
    <head>
        <link rel="stylesheet"  type="text/css" href="admin1style.css">
    </head>
    <header>
        <h5 class="hearder">Doctor Appointment System</h5>
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
        <li><a href="adddoctor.php">Add Doctor</a></li> 
        <li><a href="deletedoctor.php"> Delete Doctors</a></li>
        <li><a href="updatedoctor.php">Update Doctors </a></li>
        <li><a href="viewdoctorlist.php">View doctors Lists</a></li>
        <li><a href="viewbooking.php">View Appointments Lists</a></li> 
     </ul>
     <br>
   <a href="logout.php"> logout</a>
</body>
      </header> 
</html>