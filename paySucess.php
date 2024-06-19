

<!DOCTYPE html>
<html lang="en">

<head>
    <!--Subscribe to our Youtube channel "Coder ACB"-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment completed</title>
   <!-- link style sheet -->
    <link rel="stylesheet" href="css/paySucess.css"> 
	
	

	
	
	
	<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

    <script>
       
		// download screenshot
        function downloadPageImage() {
            // Capture a screenshot of the visible content of the document
            html2canvas(document.body).then(function (canvas) {
                // Create a temporary link element
                var link = document.createElement("a");
                link.href = canvas.toDataURL("image/png");
                link.download = "page_image.png"; // Set the filename for the downloaded image

                // Programmatically click the link to trigger the download
                link.click();
            });
        }
    </script>

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
		
		<?php 
			
			// display transaction dat & time
			$query_paymentTime = "SELECT  Date_created from payment ";
			$result_paymentTime = mysqli_query($conn ,$query_paymentTime);
			
			
			
			while ($row = mysqli_fetch_array($result_paymentTime))
			{
				$Date_created = $row['Date_created'];
			}
			
			
		?>
		<?php 
			
			// display Transaction Number
			$query_paymentNumber = "SELECT  Ef_id  from payment ";
			$result_paymentNumber = mysqli_query($conn ,$query_paymentNumber);
			
			
			
			while ($row = mysqli_fetch_array($result_paymentNumber))
			{
				$Ef_id = $row['Ef_id'];
			}
			
			
			
		?>
		
		
    <div class="container">
        <div id="alert-additional-content-5" class="alert-box" role="alert">
		
			<div class="img">
                <img class="img" src="image/7895.png">
            </div>
			
			<h1> Ticket Payment Succesfull ! </h1>
			<pre>Your Payment has been processed!
	           Details of transaction are include below 
			</pre>
			
			
			<hr>
		
			<div class = "Details">
				<div class = "box">
					
					<p class = "topic"> Transaction Number &nbsp; :  </p>
				</div>
				<div class = "box">
					<p class = "reference"> <?php  echo $Ef_id ;?> </p>
				</div>
			</div>
			
			<div class = "Details">
				<div class = "box">
					
					<p class = "topic"> Total Amount Payed  &nbsp; :  </p>
				</div>
				<div class = "box">
					<p class = "reference"> <?php echo $Amount ?>  </p>
				</div>
			</div>
			
			<div class = "Details">
				<div class = "box">
					
					<p class = "topic"> Payed By &nbsp; :   </p>
				</div>
				<div class = "box">
					<p class = "reference"> VISA </p>
				</div>
			</div>
			
			<div class = "Details">
				<div class = "box">
					
					<p class = "topic"> Transction Date & Time &nbsp;:  </p>
				</div>
				<div class = "box">
					<p class = "reference" id="transactionTime"> <?php echo $Date_created; ?> </p>
				</div>
			</div>
        
            <div class="alert"><a href="review and rating page.html">
               <a href = "profile.php"> <button type="button" class="button">
				<i class="fa-solid fa-eye"></i> &nbsp; DONE </button></a>
                
				
				
                <button type="button" onclick="downloadPageImage()" class="Download-btn" id="close">Download &nbsp; <i class="fa-thin fa-download" style="font-family: 'Font Awesome 5 Free'; font-weight: 700;"></i> </button>
				
            </div>
			
			
			
        </div>
    </div>
	
	
	
	
</body>
</html>