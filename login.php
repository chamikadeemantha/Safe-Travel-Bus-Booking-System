<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Login.css">
    <meta charset="utf-8">

	<style type="text/css">
        body
        {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            background-image: url(image/3.png);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .sign_up
        {
            font-size: 20px;
        }

        .sign_up:hover
        {
            background-color: #fff;
        }

    </style>

    <title>Login</title>
</head>

<body>

<?php 
session_start();

    include("connection.php");
    include("function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {

            //read from database
            $query = "select * from registration where user_name = '$user_name' limit 1";
            $result = mysqli_query($conn, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {

                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] === $password)
                    {

                        $_SESSION['id'] = $user_data['id'];
                        header("Location:./profile.php");
                        die;
                    }
                }
            }
            
            echo "wrong username or password!";
        }
        else
        {
            echo "wrong username or password!";
        }
    }

?>

<!------------------------------------------------------------------>

	<div class="login-box">
    <img src="./image/avatar.png" class="avatar">
        <h1>Login</h1>
            <form id="form" action="#" method="post" class="login_form">
			
            <p>Username</p>
            <input type="text" name="user_name" placeholder="Enter Username" required>
			
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
			
			<label><input type="checkbox" name="remember_me">Remember me</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="forgotpassword.php">Forget Password</a>
			
            <input type="submit" name="login" value="Login">
			
			Don't have an account?
            <a href="signup.php" name="sign_up" class="sign_up">sign up</a>
			<br>
           
            </form>
        
    </div>


<!------------------------------------------------------------------>


</body>
</html>