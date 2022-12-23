<?php
// Create connection
$connection = new mysqli($config['server'], $config['username'], $config['password'], $config['name']);
// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>