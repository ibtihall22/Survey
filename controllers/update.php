<?php
require "db_connection.php";

$Username = $_POST['Username'];
$Age = $_POST['Age'];
$Userhepes = $_POST['Userhepes'];


if(empty($Username) || empty($Age))
    die("You didn't enter all the data");

$query = "UPDATE todos SET Username='$Username', Age='$Age' WHERE Userhepes=$Userhepes";
$query_run = mysqli_query($conn, $query);

if(!$query_run)
    die("Database error");

header("Location: ../index.php");