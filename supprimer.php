<?php
include_once"conn.php";
$idong= $_GET['idong'];
$req = mysqli_query($con ,"DELETE FROM ong WHERE idong = $idong");
header("Location:indexe.php");
?>