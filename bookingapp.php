
<html>
<title>Booking</title>
<head>
    <link  rel="stylesheet" type="text/css" href="viewdoctorliststyle.css">
</head>

<body>
<header>
<h6 class="hearder">Booking Appointments</h6>
</header>

 <form  action="booking1.php" method="GET">

<div class="specialized">
	<label>Specilized</label>
	   	<select name="specialized" class="xd" value="<?php echo $_GET['specialized']; ?>">
	   		<option value="Orthopedic" >Orthopedic</option>
	   		<option value="Heart Surgeon">heart Surgeon</option>
	   		<option value="Dentist">Dentist</option>
	   		<option value="MentalHealth">Mental Health</option>
	   		<option value="Surgery">Surgery</option>

	   		</select>
	      <br>
    
           <div class="btn">
		<input type="submit" name="submit" class="btn" value="Search"/>
	</div>
	
</form>


</body>

</html>
