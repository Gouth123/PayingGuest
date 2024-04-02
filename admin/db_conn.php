<?php
$sname= 'localhost:3307';
$unmae= 'root';
$password = '';
$db_name = 'pg2';
$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
  die("<script>alert('Connection Failed.')</script>");
}

?>