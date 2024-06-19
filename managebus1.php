<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "safetravel";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>




<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel of Bus</title>
  <link rel="stylesheet" href="css/nav.css">
  <!--cdn icon library -->
  
	<style type="text/css">

			body{

		  background-image: url("image/20.jpg");
		  background-position: center;
		  background-size: cover;
		  height: 700px;
		  background-repeat: no-repeat;
      background-attachment: fixed;
      background-color:aliceblue;
		}
	
table
{
    width:99%;
    border-collapse: separate !important;
    margin:auto;
    table-layout:fixed;
    text-align:center;
    margin-top:50px;
    background-color:darkgrey;
    border-radius: 10px 10px 0px 0px;

}
table th
{
    border-bottom:2px solid rgb(187, 187, 187);
    padding:10px 0px 10px 0px;
    font-family: "balsamiq_sansitalic" !important;
}
table tr td
{
    border-right: 2px solid rgb(187, 187, 187);
    height: 58px;
    padding: 22px 0px 0px 0px;
    font-family: "monospace;" !important;
    border-bottom: 2px solid rgb(187, 187, 187);
    font-size: 20px;
}
table tr td a
{
    
    color: white;
    border-radius: 5px;
    padding: 6px;
    text-decoration: none;
    margin: 10px;
    font-weight: 700;
}

table tr td button:hover
{

	
   

    padding: 5px 5px 5px 5px;
	border: 2px solid yellow;
    border-radius: 7px;
    background-color: red;
    color: white;
    cursor: pointer;
}
button 
{
    padding: 10px 10px 10px 10x;
}
.btnPolicy{
    text-align: center;
	padding: 20px 25px 15px 15px;
	border: 2px solid yellow;
    border-radius: 7px;
    background-color: red;
    color: white;
    
}

.btnPolicy:hover{

	background:red;
    padding: 20px 30px 20px 20px;
    cursor: pointer;

}

	</style>
      <!--cdn icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<!--(nav bar calling)-->
		  <?php include("nav.php"); ?>
       <!--(nav bar closing)--> 
  <input type="checkbox" id="check">

  <label for="check">
<i class="fa fa-bars" id="btn"></i>
<i class="fa fa-times" id="cancle"></i>


  </label>



   







		<h1><center>Manage Buses</center></h1>

<hr>


<?php

    
    $sqlget="SELECT * FROM buses";
    $sqldata=mysqli_query($conn,$sqlget) or die('error getting');
    

    echo "<table>";
    echo "<tr>
      <th>ID</th>
    <th>Bus Name</th>
    <th>Telephone Number</th>
    <th>Update</th>
    <th>Delete</th>
   
       </tr>";

       while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
       {
        echo "<tr><td>";
        echo $row['BusId'];
        echo "</td><td>";
        echo $row['BusName'];
        echo "</td><td>";
        echo $row['Telephone'];
        echo "</td>";
        
       
          
        ?>

        <td>

        <button style="border:2px solid yellow; border-radius:7px; background-color:red;color:white;">
          <a href="updatebus.php">
         
          
          

          Update

          </a>

        </button>

        </td><td>

        <button style = "border:2px solid yellow; border-radius:7px; background-color:red;color:white;" >
                   <a href="deleteBus.php?BusId=<?php echo $row["BusId"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i>

            Delete

        </a>
       </button>

        </td></tr>

<?php
       }

       echo "</table>";


?>

<br>


                      <center> <a href="AddBus.php">     <button class="btnPolicy">Add Bus</button></a> </center><br>
<hr>
<br>

</div>

</body>
</html>