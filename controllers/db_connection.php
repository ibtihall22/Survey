<?php

$location = 'localhost';
$username = 'root';
$password = '';
$database = 'Survey';

$conn = mysqli_connect($location, $username, $password, $database);

if(!$conn)
    die("Database connection error.");