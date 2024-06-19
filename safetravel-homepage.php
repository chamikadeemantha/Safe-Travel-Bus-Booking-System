<!DOCTYPE html>

   <head>
      <title>Safe Travel</title>
      <link rel="stylesheet" href="css/nav.css">
      <link rel="stylesheet" href="css/footer.css">
      <link rel="stylesheet" type="text/css" href="css/videoedit.css">
      <!--footer social media icon style-->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-...your-integrity-hash-here..." crossorigin="anonymous" />


      <style type="text/css">
         body{
         background-image: url(image/3.png);
         background-size: cover;
         background-repeat: no-repeat;
         background-attachment: fixed;
         margin: 0;
         padding: 0;
         width: 100%;
         height: 100%;
         background-color: black;
         }
         #container{
         height: 100vh;
         width: 100%;
         background-image: url(image/3.png);
         background-size: cover;
         background-position: center;
         background-repeat: no-repeat;
         background-attachment: fixed;
         transition: 2s;
         font-family: cursive;
         animation-name: animate;
         animation-direction: alternate-reverse;
         animation-duration: 40s;
         animation-fill-mode: forwards;
         animation-iteration-count: infinite;
         animation-play-state: running;
         animation-timing-function: ease-in-out;
         }
         @keyframes animate{
         0%{
         background-image: url(image/1.jpg);
         }
         10%{
         background-image: url(image/2.jpg);
         }
         20%{
         background-image: url(image/3.png);
         }
         30%{
         background-image: url(image/4.png);
         }
         40%{
         background-image: url(image/5.png);
         }
         50%{
         background-image: url(image/6.png);
         }
         60%{
         background-image: url(image/7.png);
         }
         70%{
         background-image: url(image/8.png);
         }
         80%{
         background-image: url(image/9.png);
         }
         90%{
         background-image: url(image/10.png);
         }
         100%{
         background-image: url(image/1.jpg);
         }
         }
         .home_details{
         color: #fff;
         font-family: inherit;
         font-size: 74px;
         padding: 162px 5px 5px 185px;
         }
         .font{
         color: #F9522E;
         }
         .btnHome{
         font-family: inherit;
         background-color: #F9522E;
         padding: 13px 44px 13px 44px;
         font-size: 18px;
         border-style: none;
         }
         .btnHome:hover{
         background-color: orange;
         cursor: pointer;
         }
      </style>
   </head>
   <body>

      <div id="container">
         <!--callling nav bar-->
		    <?php include("nav.php"); ?>
           
         <h1 class="home_details">Book Now.Wide Selection. <br><font class="font">Convenient Scheduling....</font>
            <br>
            <a href="signUp.php">     <button class="btnHome">SIGN UP NOW</button></a>
         </h1>
      </div>
	  
	  <!--TO play the video 
			ex-using chrome browser
			open website >> go to the setting >> privacy and policy >>site setting >> Background sync
			>>Allow this-Recently closed sites can finish sending and receiving data 
			>>Then add website url in -Not allowed to finish sending or receiving data >>Reload web page
			(if it's still not play update code autoplay loop muted then video will run without sound)-->
	                            
      <div class="section">
         <video autoplay loop class="section">
            <source src="video/video.mp4" type="video/mp4">
         </video>
      </div>
      <!--footer calling-->
	    <?php include("footer.php"); ?>
         
   </body>
</html>