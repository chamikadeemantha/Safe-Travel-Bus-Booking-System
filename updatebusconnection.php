<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "safetravel";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_POST["BusUpdate"])) {
  $id = $_POST['id'];
  $nameOFbus = $_POST['bus_name'];
  $tel = $_POST['tel'];

  $sql = "UPDATE buses SET BusName='$nameOFbus', Telephone='$tel' WHERE BusId='$id'";

  $result = mysqli_query($conn, $sql);

  
        echo ("<script LANGUAGE='JavaScript'>
          window.alert('Successfully Bus updated!!!');
          
          </script>");
    header("Location: managebus1.php");
   exit();
}
?>
