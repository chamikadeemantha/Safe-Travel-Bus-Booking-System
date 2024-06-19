<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>

	<link rel="stylesheet" href="./css/usersignup.css">
	
  <style type="text/css">     
      body
      {
      
        background-image: url(image/7.png);
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
      }

      .confirm
      {
          background-color: black;
          margin-top: 5px;
      }

      .account
      {
          color: yellow;
      }

      a
      {
          color: white;
      }
      
    </style>
</head>

<body>

<?php

session_start();

  include("connection.php");
  include("function.php");


  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $num = $_POST['num'];
    $birth = $_POST['birth'];
    $male = $_POST['male'];
    $nic = $_POST['nic'];
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $con_pass=$_POST['con_pass'];


   // echo $user_name;


    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        

       if($password==$con_pass){

        
        //   $password=md5($password);//

            //save to database
            $id = random_num(20);
            $query = "insert into registration (id,fname,lname,email,num,birth,male,nic,user_name,password	
            ) values ('$id','$fname','$lname','$email','$num','$birth','$male','$nic','$user_name','$password')";

            mysqli_query($conn,$query);

            echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully your Sign Up!!!');
    window.location.href='Login.php';
    </script>");

        }
        else{

             echo "Please enter confirm password as previous one!!";

          }
    }
    else{
    
         echo "Please enter some valid information!";

      }
  }
?>

<!------------------------------------------------------------------>

	<div class="wrapper">
  <div class="registration_form">
    <div class="title">
      Registration
    </div>

    <form action="#" method="POST">
      <div class="form_wrap">
        <div class="input_grp">
          <div class="input_wrap">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" placeholder="First Name" required>
          </div>
          <div class="input_wrap">
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" placeholder="Last Name" required>
          </div> 
		</div>		  
		  <div class="input_wrap">
            <label for="email">Email Address</label>
            <input type="text" id="email" name="email" placeholder="E-mail" required>
          </div>
          <div class="input_wrap">
            <label for="num">Telephone Number</label>
            <input type="text" id="num" name="num" placeholder="Tel" required>
          </div>
		  <div class="input_wrap">
            <label for="birth">Date of Birth</label>
            <input type="date" id="birth" name="birth"  required>
          </div>
		  <div class="input_wrap">
			<label for="gender">Gender </label>
			<input type="radio" name="male" id="male"value="Male"/>Male
			<input type="radio" name="male" id="male" value="Female"/>Female
		  </div>
		  <div class="input_wrap">
            <label for="nic">NIC Number</label>
            <input type="text" id="nic" name="nic" placeholder="NIC" required>
          </div>
          <div class="input_wrap">
            <label for="uname">Username</label>
            <input type="text" id="uname" name="user_name" placeholder="Username" required>
          </div>
          <div class="input_wrap">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="password" required>
          </div>
         <div class="input_wrap">
           <label for="Confirm_password">Confirm Password</label>
           <input type="password" id="password" name="con_pass" placeholder="password" required>
         </div>
		
       
        <div class="input_wrap">
		  <input type="reset"  value="Reset" class="Reset_btn">
          <input type="submit" value="Register Now" name="submit_btn" class="submit_btn">
		  
        </div>

        <div class="account">Already have an account?
        <a href="loginmenu.php">login</a>
        </div>

	  </div>
      
    </form>
  </div>
</div>

<!------------------------------------------------------------------>

</body>

</html>



