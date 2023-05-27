<?php
include('connect.php');

$madg = $_GET['madg'];


mysqli_query($connect, "DELETE FROM docgia WHERE madg = '$madg'") ;

header('location:docgia.php');
