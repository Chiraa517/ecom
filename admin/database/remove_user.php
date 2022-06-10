<?php

include 'db_conn.php';

$id = $_GET['remove_id'];

$conn->query("DELETE FROM users WHERE id = '$id'") or die($conn->error);
header("LOCATION: ../users.php");
?>
