<?php
   include "connection.php";
   
   if (isset($_POST["routeAdd"])) {
   	
                  $Boarding_place=$_POST['Boarding_place'];
                  $Destination=$_POST['Destination'];
                  $Bus_Name=$_POST['Bus_Name'];
                  $Departure_date=$_POST['Departure_date'];
                  $Departure_time=$_POST['Departure_time'];
                  $Cost=$_POST['Cost'];
   
      $sql = "INSERT INTO `Schedule` (`Boarding_place`, `Destination`, `Bus_Name`, `Departure_date`, `Departure_time`, `Cost`) VALUES ('$Boarding_place','$Destination','$Bus_Name','$Departure_date','$Departure_time','$Cost')";
   
      $result = mysqli_query($conn, $sql);
   
      if ($result) {
         header("Location: viewRoute.php?msg=New record created successfully");
      } else {
         echo "Failed: " . mysqli_error($conn);
      }
   }
   
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Routes adding</title>
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
                  <h1 class="text-white text-center">  Routes adding </h1>
               </div>
               <br>
               <label for="title">Starting Place</label>
               <input type="text" id="title" name="Boarding_place" placeholder="Boarding place" autocomplete="off" required > <br>
               <label for="title">Destination</label>
               <input type="text" id="title" name="Destination" placeholder="Destination" autocomplete="off" required><br>
               <label for="title">Bus Name</label>
               <input type="text" id="title" name="Bus_Name" placeholder="Bus Name" autocomplete="off"  required><br>
               <label for="title">Departure Date</label>
               <input type="date" id="title" name="Departure_date" placeholder="Date of Departure" class="idclass" autocomplete="off" required><br>
               <label for="title">Departure Time</label>
               <input type="Time" id="title" name="Departure_time" placeholder="Time of Departure" class="idclass" autocomplete="off" required><br>
               <label for="title">Cost</label>
               <input type="text" id="title" name="Cost" placeholder="Cost" class="idclass" autocomplete="off" required>
               <button class="btn btn-success" type="submit" name="routeAdd"> Add Route Now </button><br>
               <a class="btn btn-info" type="submit" name="cancel" href="viewRoute.php"> Cancel </a><br>
            </div>
         </form>
      </div>
   </body>
</html>