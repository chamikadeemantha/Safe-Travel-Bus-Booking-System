<?php
$id = $_POST['bid'];
$bus_name = $_POST['bus_name'];
$tel = $_POST['tel'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'safetravel');
if ($conn->connect_error) {
    die("Connection Failed : " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO buses (BusId, BusName, Telephone) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $id, $bus_name, $tel);
    $execval = $stmt->execute();
    if ($execval === false) {
        die("Error: " . $stmt->error);
    }
    echo '<script type="text/javascript">alert("Bus add successfully")</script>';
	
    $stmt->close();
    $conn->close();
	header("Location: managebus1.php");
   exit();
}
?>
