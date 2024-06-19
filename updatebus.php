
<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel buses</title>
  <!--cdn icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/updatebus.css">
  <link rel="stylesheet" href="css/nav.css">
  
  
	<style type="text/css">

			body{

		  background-image: url("image/busupdate.jpg");
		  background-position: center;
		  background-size: cover;
		  height: 700px;
		  background-repeat: no-repeat;
      background-attachment: fixed;

		}
		.adminTopic{
			text-align: center;
			color: #fff;
			

		}
    .form_wrap .submit_btn:hover{

      color:#fff;
      font-weight: 600;

    }
    #decription{
      width: 100%;
      border-radius: 3px;
      border: 1px solid #9597a6;
      padding: 10px;
      outline: none;
      color: black;
    }
    .idclass{

      width: 100%;
      border-radius: 3px;
      border: 1px solid #9597a6;
      padding: 10px;
      outline: none;
      color: black;

    }




	</style>
</head>
<body>

<!--(nav bar calling)-->
		  <?php include("nav.php"); ?>
       <!--(nav bar closing)--> 
<div class="sidebar2">



          <div class="wrapper">
  <div class="update_form">
    <div class="title">
      Buses Update/Edit
    </div>

    <form action="updatebusconnection.php" method="POST">
      <div class="form_wrap">

        <div class="input_wrap">
          <label for="title">Id</label>
          <input type="text" id="title" name="id" class="idclass" required >
        </div>
        
        <div class="input_wrap">
          <label for="title">Bus Name</label>
          <input type="text" id="title" name="bus_name" placeholder="Bus Name" required>
        </div>


        <div class="input_wrap">
          <label for="title">Telephone</label>
          <input type="text" id="title" name="tel" placeholder="Tel" required>
        </div>

       
        <div class="input_wrap">

          <input type="submit" value="Update Bus Now" class="submit_btn" name="BusUpdate">

        </div>



      </div>
    </form>
  </div>
</div>




</div>

</body>
</html>