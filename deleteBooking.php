
<?php

include 'connection.php';

$T_ID = $_GET['T_ID'];
$sql = " DELETE FROM `ticket` WHERE T_ID = $T_ID " ;
$query = mysqli_query($conn,$sql);

	
	echo "<script> alert('sueccfully Delected');
		window.location.href = 'bookingPeople.php ';</script>";

?>
