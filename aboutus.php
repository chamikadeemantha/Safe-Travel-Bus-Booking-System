
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>About uS</title>
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    


    <style type="text/css">


       body{
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                background-image: url(image/aboutbg6.jpg);
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;

            }
            .sign_up{

                font-size: 20px;

            }
            .sign_up:hover{

                background-color: #fff;
                

            }
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
*{
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.about-sec{
    display: flex;
    padding: 3rem 0;
    width: 100%;
    justify-content: center;
  
  background: rgba(1, 2, 2, 0.5);
    margin-top: 106px;
}
.about-img{
    width: 250px;
    height: 300px;
    margin: 0 3rem;
}
.review-img{


    width: 280px;
    height: 300px;
    margin: 0 3rem;

  }
.about-img img{
    height: 100%;
    width: 100%;
}
.review-img img{
    height: 100%;
    width: 100%;
	}

.about-intro{
    color: #fff;
    width: 400px;
    height: 250px;
    border-left: 3px solid #00b894;
    padding-left: 2rem;
    margin: 0 3rem;
}
.about-intro p{
    margin-top: 1rem;
    font-size: 14px;
    opacity: .7;
	height: 100px;
    width: 150%;
}
@media only screen and (max-width: 900px) {
    .about-sec{
        flex-direction: column;
        align-items: center;
    }
    .about-img{
        width: 80%;
    }
	.review-img{
        width: 80%;
  }
    .about-intro{
        width: 100%;
        height: 100%;
        border-top: 3px solid #00b894;
        border-left: none;
        padding: 1rem;
        margin-top: 2rem;
    }
    .about-intro h3,p{
        width: 0%;
    }
    .about-intro p{
        font-size: 12px;
    }




}

table
{
    width:99%;
    border-collapse: separate !important;
    margin:auto;
   table-layout:fixed;
    text-align:center;
    margin-top:50px;
    background-color:aquamarine;
    border-radius: 10px 10px 10px 10px;

}
table th
{
    border-bottom:2px solid rgb(187, 187, 187);
    padding:10px 0px 10px 0px;
    font-family: "balsamiq_sansitalic" !important;
    color: black;
}
table tr td
{
    border-right: 2px solid rgb(187, 187, 187);
    height: 58px;
    padding: 22px 0px 0px 0px;
    font-family: "monospace;" !important;
    border-bottom: 2px solid rgb(187, 187, 187);
    font-size: 22px;
    color: black;
}
table tr td a
{
    background-color: rgb(255, 196, 0);
    color: black;
    border-radius: 5px;
    padding: 6px;
    text-decoration: none;
    margin: 10px;
    font-weight: 700;
}

table tr td button:hover
{

    /*
    background: rgb(255, 255, 255);
    text-decoration:underline;
    color:tomato;
    padding: 4px;
    border:2px solid tomato;
    transition:background-color 0.2s;*/

    padding: 5px 5px 5px 5px;
    border: 2px solid yellow;
    border-radius: 7px;
    background-color: red;
    color: white;
    cursor: pointer;
}
.topic_bus{
    text-align: center;
    color: #fff;
}


  

.reviewbutton{
   
    appearance: none;
    background-color: #008000;
    border: 1px solid rgba(27, 31, 35, .15);
    border-radius: 6px;
    box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-family: -apple-system,system-ui,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji";
    font-size: 14px;
    font-weight: 600;
    line-height: 20px;
    padding: 6px 16px;
    position: relative;
    text-align: center;
    text-decoration: none;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    vertical-align: middle;
    white-space: nowrap
     
} 
.reviewbutton:hover{
 background-color:darkgreen;
}
      
    </style>

  </head>
  <body>
  <!--Navigation Bar--> 
      <?php include("nav.php"); ?>
      <!--End of Navigation Bar--> 
	<button style="background:#FF5733; color:white;">
        <a href="safetravel-homepage.php">Home</a>
    </button> 



             

             <div class="about-sec">
        <div class="about-img">
            <img src="image/about us.jpg">
        </div>
        <div class="about-intro">
            <h3>About Us<span style="color: #00b894;"> !</h3>
            <p>We, eToursLanka (Pvt) Ltd. who is pioneer of Online Bus Ticket Booking Service in Sri Lanka since 2010. 
			In this segment the company has launch a web site www.NZfare.LK with the collaboration of NTC/CTB registered Busses in Sri Lanka.
			</p>
           <p>Plan your trip, reserve bus tickets, andarrive at your destination
            We offer a complete online bus booking platform where you can buy and sell bus seats. 
			The traveler can purchase bus tickets online, and in exchange, a text message 
			with travel details will be delivered to confirm the seat reservation.
            Plan your journey ahead of time, save time buying bus tickets, avoid lengthy lines,
			discover your boarding location quickly, and enjoy your joyous journey in comfort using Ezfare's efficient bus reservation system
            </p>
		</div>
    </div>





<?php include("aboutusconnection.php");?>
<h1 class="topic_bus"> ...Our Buses...</h1>

<?php

    
    $sqlget="SELECT * FROM buses";
    $sqldata=mysqli_query($conn,$sqlget) or die('error getting');
    

    echo "<table>";
    echo "<tr>
      <th><h2>ID</h2></th>
    <th><h2>Bus Name</h2></th>
    <th><h2>Telephone Number</h2></th>
    
   
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
		</tr>


<?php
       }

       echo "</table>";


?>


          

             <div class="about-sec">
        <div class="review-img">
            <img src="image/review3.jpg">
        </div>
        <div class="about-intro">
           <a href="ReviewandRating.php" class="reviewbutton">Reviews And Ratings</a>
            <p>Our Service is reliable and efficient, earning a solid four-star rating from . 
			The buses are clean and well-maintained, and the drivers are courteous and professional. 
			The routes are well-planned, ensuring that commuters can reach their destinations without much hassle.
			The frequency of buses is commendable, with minimal waiting times during peak hours. However, 
			I would appreciate more real-time updates on bus schedules and possible delays. Overall, the bus 
			system provides a convenient and cost-effective mode of transportation for residents and visitors alike
            </p>


        </div>
    </div>






  </body>
</html>
