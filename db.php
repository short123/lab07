<?php
$host = "localhost";
$user = "it58160428";
$password = "it58160428";
$dbname = "it58160428";
$conn = new mysqli($host, $user, $password, $dbname);
$conn->query('SET NAMES UTF8');
if ($conn->connect_error) die($conn->connect_error);
?>