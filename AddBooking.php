
<!DOCTYPE html>
<html>
<head>
  <title>booking page</title>
<!-- link style sheet -->
<link rel="stylesheet" href="css/addBokking.css">
 
 
</head>
<body>
	<!-- conect database -->
	<?php include 'connection.php'; ?>

	
	<div class = "container">
	<button class = "pfButton" > <a href="profile.php"> Pofile  </a> </button>
	
		<div class = "title" >
			<h2> Online Booking Form </h2>
			<pre> To reserve sheets please complete and submit the booking form </pre>
		</div>
		
		<form class = "claregistration_form" action="#" method="POST" >

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
				<input type="submit" value="Booking Now " class="submit-btn" name="checkout">
			</div>
			
		</form>
		<?php
		
			// 'checkout' button was clicked
			if (isset($_POST['checkout']))
			{
				//store data 
			
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
				
				
				//echo $passenger_fname ." , " . $passenger_lname ." , ". $tel  ." , ".  $tel  ." , ".  $email  ." , ".  $board_place  ." , ".  $destination ." , ".  $departure_date  ." , ".  $departure_time ." , ".  $return_date ." , ".  $return_time .", ". $Amount;
				
			
				
				
				//insert data 
				
				$query = "INSERT INTO ticket(First_name, Last_name, Telephone, Email, Boarding_place, Destination, Depature_Date, Depature_Time,
				Return_Date, Return_Time, Amount )VALUES ('$passenger_fname', '$passenger_lname', '$tel', '$email', '$board_place', '$destination', '$departure_date', 
				'$departure_time', '$return_date', '$return_time', '$Amount')";
				

				
				if (mysqli_query($conn , $query ))
				{
					echo "<script> alert('sueccfully added');
					 window.location.href = 'payment.php';</script>";
					
					
				}
				else 
				{
					echo "Data not inserted ".mysqli_error($conn);
				}
				
				
			}
			
		
		?>
	</div>
	
	<script type="text/javascript" src="js/signUp.js"></script>
</body>
</html>