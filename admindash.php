<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/nav.css">
      <title>Admin Dashboard</title>
      <style>
         body {
         background-color: #fff;
         }
         .btn-dark {
         background-color: #3A83F4;
         color: #000000;
         width: 100%;
         height: 200px;
         font-size: 24px;
         }
         .container {
         display: flex;
         flex-direction: column;
         justify-content: center;
         align-items: center;
         height: 100vh;
         }
      </style>
   </head>
   <body>
      <!--(nav bar calling)-->
      <?php include("nav.php"); ?>
      <!--(nav bar closing)-->
      <div class="container">
         <a href="viewRoute.php" target="_blank" class="btn btn-dark">Manage Routes</a>
         <a href="managebus1.php" target="_blank" class="btn btn-dark">Manage Buses</a>
         <a href="bookingPeople.php" target="_blank" class="btn btn-dark">Booking People</a>
         <a href="loginmenu.php" target="_blank" class="btn btn-dark">logout</a>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   </body>
</html>