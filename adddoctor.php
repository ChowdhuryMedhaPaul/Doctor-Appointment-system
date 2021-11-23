<html>

<title>Add Docotors</title>
<head>
    <link  rel="stylesheet" type="text/css" href="adddoctorstyle.css">
</head>

<body>
<header>
<h6 class="hearder">Add <span>Doctor Informations</span></h6>
</header>

 <form  method="Post">


	<div class="name">
		<label>Name</label>
		<input type="text" name="d_name" required >


	</div>

    
    <div class="address">
		<label>Address</label>
		<input type="text" name="d_address" required>

	</div>

    
    <div class="number">
		<label>Number</label>
		<input type="text" name="d_number" required>


	</div>


	<div class="email">
		<label>Email</label>
		<input type="text" name="d_email" required>

	</div>


    <div class="specialized">
	<label>Specilized</label>
	   	<select name="specialized" class="xd" required>
	   		<option value="Orthopedic" >Orthopedic</option>
	   		<option value="Heart Surgeon">Heart Surgeon</option>
	   		<option value="Dentist">Dentist</option>
	   		<option value="MentalHealth">Mental Health</option>
	   		<option value="Surgery">Surgery</option>

	   		</select>
	   
		</div>

		   <div class="Visitingdays">
		<label>VisitDays</label>
		<input type="text" name="visitingdays" required>

	</div>

	<div class="Visitinghours">
		<label>VisitHours</label>
		<input type="text" name="visitinghours" required>

	</div>

	<div class="Available">
		<label>Available</label>
		<input type="text" name="available" required>

	</div>
    
           <div class="btn">
		<input type="submit" name="submit" class="btn">
	</div>
	
</form>


<?php
 include ("connection.php");
 session_start();
if(isset($_POST['submit']))
{
     $d_id=$_POST['d_id'];
	$d_name = $_POST['d_name'];
	$d_address = $_POST['d_address'];
	$d_number = $_POST['d_number'];
	$d_email = $_POST['d_email'];
	$specialized = $_POST['specialized'];
	$visitingdays = $_POST['visitingdays'];
	$visitinghours = $_POST['visitinghours'];
	$available=$_POST['available'];
	$sql="INSERT into doctor values('','$d_name','$d_address','$d_number','$d_email','$specialized','$visitingdays','$visitinghours','$available')";
  
	$result = mysqli_query($connect,$sql);
  
  if($result)
  {
	  $_SESSION['id']=$id;
	  echo "Successful added data";
	  header("location: adminview.php");
  }
  else{
	  echo "Failed";
  }

}



?>



</body>

</html>