
<!DOCTYPE html>
<html>
	<head>
	<title> Update Booking </title>

		<!--  link style sheet -->
		<link rel="stylesheet" href="css/addBokking.css">
		
	 
	</head>
	<body>
		  <!-- conect data base -->
		   <?php include 'connection.php'; ?>

		   <?php 


			  

			   if(isset($_POST['updateBooking'])){
				   
				$T_ID=$_POST['T_ID']; 
				$passenger_fname = $_POST['passenger_fname'];
				$passenger_lname = $_POST['passenger_lname'];
				$tel = $_POST ['tel'];
				$email = $_POST ['email'];
				$board_place = $_POST['board_place'];
				$destination = $_POST ['destination'];
				$departure_date = $_POST ['departure_date'];
				$departure_time = $_POST ['departure_time'];
				$return_date = $_POST ['return_date'];
				$return_time = $_POST ['return_time'];
				$Amount = $_POST['Amount'];
		 

			   $query="UPDATE `ticket` SET First_name='$passenger_fname',Last_name='$passenger_lname',Telephone='$tel',Email='$email',Boarding_place='$board_place',Destination='$destination',Depature_Date='$departure_date',Depature_Time='$departure_time',Return_Date='$return_date',Return_Time='$return_time',Amount='$Amount' where T_ID  = $T_ID ";


			   $query_run=mysqli_query($conn,$query);

			  
		  

				 if($query_run){

					 echo "<script> alert('sueccfully Updated');
							window.location.href = 'bookingPeople.php ';</script>";




				  }

				  else{

					   echo '<script type="text/javascript">alert("Booking not updated!!!")</script>';
				   }

				   

			 }

		?>

		<div class = "container">
	
			<div class = "title" >
				<h2> Online Booking Form </h2>
				<pre> To reserve sheets please complete and submit the booking form </pre>
			</div>
		
			<form class = "claregistration_form" action="#" method="POST" >
				
				<div class = "wrapper">
					<div class="box">
						<label for="title">Ticket ID</label>
						<input type="text" id="title" name="T_ID" class="idclass" value="<?php echo $_GET['T_ID'];?>">
					</div>
					
				</div>
				
				<div class = "wrapper">
					<div class = "box">
						<label for="title">Full Name </label>
						<input type="text" id="title" name="passenger_fname" placeholder="First Name" required>
					</div>
					<div class = "box">
						<br>
						<input type="text" id="title" name="passenger_lname" placeholder="Last Name" required>
					</div>
				</div>
				
				<div class = "wrapper">
					<div class = "box">
						<label for="title">Telephone</label>
						<input type="text" id="title" name="tel" placeholder="Tel" required>
					</div>
					<div class = "box">
						<label for="title">E-mail</label>
						<input type="E-mail" id="title" name="email" placeholder="E-mail" class="idclass" required>	
					</div>
				</div>
			
				<div class="wrapper">
					<div class="box">
						<label for="title">From</label>
						<br>
						<select class="board_place" onchange="show_destinations();" name = "board_place" required>
							<option value="">Select board_place</option>
							<option value="Galle">Galle</option>
							<option value="Mathara">Mathara</option>
						</select>
					</div>
					<div class="box">
						<label for="title">To</label>
						<br>
						<select class="destination" onchange="showDeparture(); showReturn(); valuepass();" name = "destination" required>
							<option value="">Select destination</option>
							<option value = "Jaffna"> Jaffna </option>
							<option value ="Negombo"> Negombo </option>
							<option value ="Ampara"> Ampara </option>
							<option value = "Mullaitive"> Mullaitive </option>
							<option value = "Batticaloa"> Batticaloa </option>
							<option value = "Kanndy"> Kanndy </option>
							<option value = "Trincimolee"> Trincimolee </option>
							<option value = "Polonnaruva"> Polonnaruva </option>
						</select>
					</div>
				</div>

				<div class="wrapper">
					<div class="box">
						<label for="departure_date">Departure Date</label>
						<input type="text" id="departure_date" name="departure_date" placeholder="Departure Date" readonly>
					</div>
					<div class="box">
						<label for="departure_time">Departure Time</label>
						<input type="text" id="departure_time" name="departure_time" placeholder="Departure Time" readonly>
					</div>
				</div>

				<div class="wrapper">
					<div class="box">
						<label for="return_date">Return Date</label>
						<input type="text" id="return_date" name="return_date" placeholder="Return Date" readonly>
					</div>
					<div class="box">
						<label for="return_time">Return Time</label>
						<input type="text" id="return_time" name="return_time" placeholder="Return Time" readonly>
					</div>
				</div>





				
				<div class = "wrapper">
					<div class="box">
						<label for="Amount">Amount</label>
						<input type="text" id="Amount" name="Amount" placeholder="Amount" readonly>
					</div>
				</div>
				
				<div class = "submitButton">
					<br>
					<input type="submit" value="Update Now" class="submit-btn" name="updateBooking">
				</div>

				
			</form>
		
	</div>

	<!-- linl java script -->
	<script type="text/javascript" src="js/signUp.js"></script>

	</body>
</html>