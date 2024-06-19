<nav>
   <ul>
      <li class="logo">
         <h4>
         <img src="image/logo.jpg" width ="80" height ="40">
      </li>
      <li class="btn"><span class="fas fa-bars"></span></li>
      <div class="items">
         <li><a href="safetravel-homepage.php">Home</a></li>
         <li><a href="SUPPORT.php">Support</a></li>
         <li><a href="loginmenu.php">Login</a></li>
         <li><a href="aboutus.php">About Us</a></li>
         <li><a href="contactUs.php">Contact Us</a></li>
         <li><a href="services.php">Services</a></li>
      </div>
      <li class="search-icon">
         <input type="search" placeholder="Search">
         <label class="icon">
         <span class="fas fa-search"></span>
         </label>
      </li>
   </ul>
</nav>
<script>
   $('nav ul li.btn span').click(function(){
     $('nav ul div.items').toggleClass("show");
     $('nav ul li.btn span').toggleClass("show");
   });
</script>