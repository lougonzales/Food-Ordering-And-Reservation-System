<?php
include '../includes/connect.php';

$table_name = $_POST['table_name'];
$table_seat = $_POST['table_seat'];

$sql = "INSERT INTO tables (table_name, table_seat) VALUES ('$table_name', '$table_seat')";

header("location: ../tables.php");
?>