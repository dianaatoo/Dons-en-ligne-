<?php
include_once"conn.php";
$idA= $_GET['idA'];
$req = mysqli_query($con ,"DELETE FROM association WHERE idA = '$idA'");
header("Location:indexe.php");
?>