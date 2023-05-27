<?php
include("connect.php");

$madg = $_POST['madg'];
$tendg = $_POST['tendg'];
$diachidg = $_POST['diachidg'];
$sothe = $_POST['sothe'];

if (isset($_POST["capnhat"])) {
    $query = "UPDATE docgia SET madg='$madg', tendg='$tendg', diachidg='$diachidg', sothe='$sothe'
                          WHERE madg='$madg'";
    $ketqua = mysqli_query($connect, $query);
}

header('location:docgia.php');
