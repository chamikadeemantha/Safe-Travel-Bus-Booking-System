<?php

include 'connection.php';

$id = $_GET['id'];
$sql = " DELETE FROM `registration` WHERE id = $id " ;
$query = mysqli_query($conn,$sql);

  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully your profile Deleted');
    window.location.href='safetravel-homepage.php';
    </script>");
    
?>