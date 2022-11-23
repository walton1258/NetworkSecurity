<?php
session_start();
$dbHost = 'localhost';
$dbName = 'login_otp_db';
$dbUsername = 'root';
$dbPassword = '';
$dbc= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
?>