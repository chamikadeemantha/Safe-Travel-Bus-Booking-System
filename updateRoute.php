<?php
include "connection.php";
$SID = $_GET["SID"];

if (isset($_POST["routeAdd"])) {
  $Boarding_place = $_POST['Boarding_place'];
  $Destination = $_POST['Destination'];
  $Bus_Name = $_POST['Bus_Name'];
  $Departure_date = $_POST['Departure_date'];
  $Departure_time = $_POST['Departure_time'];
  $Cost = $_POST['Cost'];

  $sql = "UPDATE `Schedule` SET `Boarding_place`='$Boarding_place',`Destination`='$Destination',`Bus_Name`='$Bus_Name',`Departure_date`='$Departure_date',`Departure_time`='$Departure_time',`Cost`='$Cost' WHERE SID = $SID";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: viewRoute.php?msg=Route updated successfully");
    exit();
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

$sql = "SELECT * FROM `Schedule` WHERE SID = $SID LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Routes Updating</title>
	  <link rel="stylesheet" href="css/nav.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   </head>
   <body>
	    <!--(nav bar calling)-->
		  <?php include("nav.php"); ?>
        <!--(nav bar closing)-->    
      <div class="col-lg-6 m-auto">
         <form method="post">
            <br><br>
            <div class="card">
               <div class="card-header bg-primary">
                  <h1 class="text-white text-center">  Routes updating </h1>
               </div>
               <br>
               <label for="boarding_place">Starting Place</label>
               <input type="text" id="boarding_place" name="Boarding_place" placeholder="Boarding place" autocomplete="off" required value="<?php echo $row['Boarding_place']; ?>"><br>
               <label for="destination">Destination</label>
               <input type="text" id="destination" name="Destination" placeholder="Destination" autocomplete="off" required value="<?php echo $row['Destination']; ?>"><br>
               <label for="bus_name">Bus Name</label>
               <input type="text" id="bus_name" name="Bus_Name" placeholder="Bus Name" autocomplete="off" required value="<?php echo $row['Bus_Name']; ?>"><br>
               <label for="departure_date">Departure Date</label>
               <input type="date" id="departure_date" name="Departure_date" placeholder="Date of Departure" class="idclass" autocomplete="off" required value="<?php echo $row['Departure_date']; ?>"><br>
               <label for="departure_time">Departure Time</label>
               <input type="time" id="departure_time" name="Departure_time" placeholder="Time of Departure" class="idclass" autocomplete="off" required value="<?php echo $row['Departure_time']; ?>"><br>
               <label for="cost">Cost</label>
               <input type="text" id="cost" name="Cost" placeholder="Cost" class="idclass" autocomplete="off" required value="<?php echo $row['Cost']; ?>">
               <button class="btn btn-success" type="submit" name="routeAdd"> Update Route Now </button><br>
               <a class="btn btn-info" type="submit" name="cancel" href="viewRoute.php"> Cancel </a><br>
            </div>
         </form>
      </div>
   </body>
</html>
