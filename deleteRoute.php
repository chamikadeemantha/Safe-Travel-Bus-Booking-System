<?php
include "connection.php";
$SID = $_GET["SID"];
$sql = "DELETE FROM `Schedule` WHERE SID = $SID";
$result = mysqli_query($conn, $sql);
if ($result) {
header("Location: viewRoute.php?msg=Route deleted successfully");
} else {
echo "Failed: " . mysqli_error($conn);
}
?>