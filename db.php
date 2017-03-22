<?php
$host = "localhost";
$user = "it58160546";
$password = "it58160546";
$dbname = "it58160546";
$conn = new mysqli($host, $user, $password, $dbname);
$conn->query('SET NAMES UTF8');
if ($conn->connect_error) die($conn->connect_error);
?>