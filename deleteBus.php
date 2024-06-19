

<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "safetravel";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$SID = $_GET["BusId"];
$sql = "DELETE FROM `buses` WHERE `BusId` = '$SID'";
$result = mysqli_query($conn, $sql);
if ($result) {

echo ("<script LANGUAGE='JavaScript'>
          window.alert('Successfully Bus Deleted!!!');
          
          </script>");
header("Location: managebus1.php");
   exit();
} else {
echo "Failed: " . mysqli_error($conn);
}



?>
