<?php
include("connect.php");

$madg = $_POST['madg'];
$tendg = $_POST['tendg'];
$diachidg = $_POST['diachidg'];
$sothe = $_POST['sothe'];


if (isset($_POST["them"])) {
    $sql = "INSERT INTO docgia VALUES ('$madg','$tendg','$diachidg','$sothe')";
    $ketqua = mysqli_query($connect, $sql);

}

header('location:docgia.php');
