<?php
   include "connection.php";
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="css/nav.css">
      <!-- Bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <title>View Route</title>
   </head>
   <body>
	    <!--(nav bar calling)-->
		    <?php include("nav.php"); ?>
        <!--(nav bar closing)-->
	  <a href="admindash.php" class="btn btn-dark mb-3">Back</a>
      <div class="container">
         <?php
            if (isset($_GET["msg"])) {
              $msg = $_GET["msg"];
              echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
              ' . $msg . '
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            }
            ?>
         <table class="table table-hover text-center">
            <thead class="table-dark">
               <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Boarding place</th>
                  <th scope="col">Destination</th>
                  <th scope="col">Bus Name</th>
                  <th scope="col">Departure date</th>
                  <th scope="col">Departure time</th>
                  <th scope="col">Cost</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  $sql = "SELECT * FROM `Schedule`";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                  ?>
               <tr>
                  <td><?php echo $row["SID"] ?></td>
                  <td><?php echo $row["Boarding_place"] ?></td>
                  <td><?php echo $row["Destination"] ?></td>
                  <td><?php echo $row["Bus_Name"] ?></td>
                  <td><?php echo $row["Departure_date"] ?></td>
                  <td><?php echo $row["Departure_time"] ?></td>
                  <td><?php echo $row["Cost"] ?></td>
                  <td>
                     <a href="updateRoute.php?SID=<?php echo $row["SID"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                     <a href="deleteRoute.php?SID=<?php echo $row["SID"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                  </td>
               </tr>
               <?php
                  }
                  ?>
            </tbody>
         </table>
      </div>
      <center><a href="addRoute.php" class="btn btn-dark mb-3">Add Route</a></center>
      <!-- Bootstrap -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   </body>
</html>