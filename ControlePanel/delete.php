<?php 

include '../ressources/database/db_connection.php';
$conn = OpenCon();
session_start();

mysqli_query($conn, "DELETE FROM `users` WHERE `username` = '{$_POST['username']}'" );


?>
