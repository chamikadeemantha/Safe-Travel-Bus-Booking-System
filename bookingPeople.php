<!DOCTYPE html>
<html>
<head>
	<title>Booking Manage</title>
	
	<!--link styleshett -->
	<link rel="stylesheet" href="css/bookingpeople.css">
	 <link rel="stylesheet" href="css/nav.css">
	

  
</head>
<body>
	<?php include 'connection.php'; ?>
	 <?php include("nav.php"); ?>
	 
	
<div class="contain">


    <h1 class="adminTopic"><b>Booking Peoples...</b></h1>
	
	
	<div class = "row">
	<?php 
	
		$query_booked = "SELECT T_ID, First_name, Last_name,Telephone,Email, Boarding_place, Destination, Depature_Date, Depature_Time FROM ticket ";
		$result_booked = mysqli_query($conn, $query_booked);
		
			
	?>
	
	
		
		<table>
			<tr>
				<th> ID </th>
				<th> First_name</th>
				<th> Last_name </th>
				<th> Telephone  </th>
				<th> Email </th>
				<th> Boarding_place </th>
				<th>  Destination</th>
				<th> Depature_Date </th>
				<th> Depature_Time</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
			
	<?php
	
		 while ($row = mysqli_fetch_array($result_booked))
		 {
			$T_ID = $row['T_ID'];
			$First_name = $row['First_name'];
			$Last_name = $row['Last_name'];
			$Telephone = $row['Telephone'];
			$Email = $row['Email'];
			$Boarding_place = $row['Boarding_place'];
			$Destination = $row['Destination'];
			$Depature_Date = $row['Depature_Date'];
			$Depature_Time = $row['Depature_Time'];
		 
	
	
	?>
			<tr>
				<td><?php echo $T_ID; ?></td> 
				<td><?php echo $First_name; ?></td>
				<td><?php echo $Last_name; ?></td>
				<td><?php echo $Telephone; ?></td>
				<td><?php echo $Email; ?></td>
				<td><?php echo $Boarding_place; ?></td>
				<td><?php echo $Destination; ?></td>
				<td><?php echo $Depature_Date; ?></td>
				<td><?php echo $Depature_Time; ?> </td>
				
				
				<td>

					<button style="border:2px solid yellow; border-radius:7px; background-color:red;color:white;">
					  <a href="updateBooking.php?T_ID=<?php echo $row['T_ID'];?>">
					 
					  
					  

					  Update

					  </a>

					</button>

				</td>
				<td>

					<button style="border:2px solid yellow; border-radius:7px; background-color:red;color:white;">
					  <a href="deleteBooking.php?T_ID=<?php echo $row['T_ID'];?>">
					 
					  
					  

					  Delete

					  </a>

					</button>

				</td>
		
			</tr>
	<?php } ?>		
		
		</table>
		

	</div>
		





</div>

</body>