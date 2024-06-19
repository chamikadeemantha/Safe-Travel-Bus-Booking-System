<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot or change password</title>
    <style>
        body
        {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        form
        {
            margin: 50px auto;
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        
        label
        {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        
        input[type=email]
        {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
        }
        
        input[type=submit]
        {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
        }
        
        input[type=submit]:hover
        {
            background-color: #3e8e41;
        }
    </style>
</head>

<body>
    <!-- HTML form for the login page -->
    <form method="POST" action="success.php">
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <a href="#"  ><input type="submit" value="Reset Password"><a>
    </form>

</body>
</html>