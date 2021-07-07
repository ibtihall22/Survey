<?php
require "db_connection.php";

$Username = $_POST['Username'];
$Age = $_POST['Age'];
$Userhepes = $_POST['Userhepes'];

if(empty($User name) || empty($description))
    die("You didn't enter all the data");

$query = "INSERT INTO todos (Username, description) VALUES('$Username', '$Age')";
$query_run = mysqli_query($conn, $query);

if(!$query_run)
    die("Database error");

header("Location: ../index.php");