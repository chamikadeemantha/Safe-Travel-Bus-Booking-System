<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/payment.css">
	
	<!-- ADD  the  icon  library -->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	 
	<!-- <script>
	 
	 // crad number  & date java scrip 
	 
		function cardpace()
		{
			var carddigit = document.getElementById('inputCardNumber').value;
			if(carddigit.length == 4 || carddigit.length == 9 || carddigit.length == 14 )
			{
				document.getElementById('inputCardNumber').value = carddigit + " ";
				document.getElementById('inputCardNumber').max = 1;
				
			}
		}

		function addShelsheet()
		{
			var expiredate = document.getElementById('inputEpairDate').value;
			if( expiredate.length == 2)
			{
				document.getElementById('inputEpairDate').value = expiredate + " /";
				document.getElementById('inputEpairDate').max = 1;
				
			}
		}
		
		
		
		
	
	 
	 
	 </script>
	 -->
	 
	
	
</head>
<body>

	

	<?php include 'connection.php'; ?>
		
		
		<?php 
			
			// display amount
			$query_payment = "SELECT  Amount from ticket ";
			$result_payment = mysqli_query($conn ,$query_payment);
			
			
			
			while ($row = mysqli_fetch_array($result_payment))
			{
				$Amount = $row['Amount'];
			}
			
			
			
			
		?>

	<div class="container">

		<form  action = "#" method="POST">

			<div class="row">

				<div class="col">
				
					
					
					<h3 class="title"> <u>  PAYMENT  </u> </h3>
					<!--<img class = "logo" src="image/cart.jpg" alt="paymentlogo"> -->
					
					


					<div class="inputBox">
						<span>cards accepted :</span>
						
						<img src="image/card_img1.jpg" alt=""> 
						<img src="image/card_img2.png" alt=""> 
						<img src="image/card_img3.jpeg" alt=""> 
						<img src="image/card_img4.png" alt="">
						<img src="image/card_img5.jpg" alt=""> 
						<!--
						<input  type = "radio" name = "image"></input>
						<input type = "radio" name = "image"></input>
						<input type = "radio" name = "image"></input>
						<input type = "radio" name = "image"></input>
						<input type = "radio" name = "image"></input> -->
						
						
					</div>
					<div class="inputBox">
					   <input class = "form-control" id = "inputName" style="font-family: 'Font Awesome 5 Free'; font-weight: 700;" type="text" placeholder=" &#xf007; Cardholder's Name" name="cardName" required> 
					</div>
					<div class="inputBox">
						<input class = "form-control" maxlength = "19" id = "inputCardNumber"style="font-family: 'Font Awesome 5 Free'; font-weight: 700;" type="text" placeholder="&#xf09d; Card Number" onkeypress = "cardpace()" name="cardNumber" required >
					</div>
					<div class="flex">
						<div class="inputBox">
							<input class = "form-control" maxlength = "6" id = "inputEpairDate" style="font-family: 'Font Awesome 5 Free'; font-weight: 700;" type="tel" autocomplete="cc-exp" onkeypress = "addShelsheet()"  placeholder="&#xf073 MM / YYYY" required>
						</div>
						<div class="inputBox">
							<input style="font-family: 'Font Awesome 5 Free'; font-weight: 700;" type="text" placeholder="&#xf023; CVC" name="cvv" maxlength = "3" required>
						</div>
					</div>
					
					<div class="inputBox">
						<h2 class = "AmountTitle" > You Have Pay </h2>
						<h1 class = "Amount" id = "Amount" name = "Amount" > <?php echo $Amount ?> </h1>
					</div>
					


					
					

				</div>
		
			</div>
			
			<br>
			
			
			<input type="submit" value="Pay Now " class="submit-btn" name="checkout">
			

		</form>
		
		
		
		<?php
		
			if (isset($_POST['checkout'])) 
			{
				// 'checkout' button was clicked

				// Retrieve the 'Amount' value from $_POST array
			$Amount = $_POST['Amount'];
			
			echo $Amount;
			
			
			

				

				// insert data
			$query = "INSERT INTO payment(Amount) VALUES ('$Amount')";
			
			if (mysqli_query($conn , $query ))
			{
				
				echo "<script> alert('sueccfully added');
					 window.location.href = 'paySucess.php';</script>";
				
			}
			else 
			{
				echo "Data not inserted ".mysqli_error($conn);
			}

			}	
			
			
		?>


	</div>    
    <script type="text/javascript" src="js/payment.js"></script>
</body>
</html>