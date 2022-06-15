<?php
$title = "Cpanel";
$css = '<link rel="stylesheet" href="../ressources/css/style_evolution.css">';
require "../ressources/headfoot/header.php";
include '../ressources/database/db_connection.php';
$conn = OpenCon();
session_start();

$user = mysqli_query($conn, "SELECT `username` FROM `users`");
$res = $user->fetch_all();

?>
<div class="container0">
  <div class="container1">

    <div>
      <p> All users : </p> <br />
      <?php
      for ($i = 0; $i < count($res); $i++) {
        echo $res[$i][0] . "<br>";
      }

      ?>
    </div>
    <br />
    <div>
      <p> Delete users : </p> <br />
      <form name="form" action="delete.php" method="post">
        <input type="text" name="username" placeholder="Username" id="username" required>
        <input type="submit" value="delete">
      </form>

    </div>


    <div class="humeurkrobitxt">
      <p>
      <p>

    </div>


  </div>


  <?php require "../ressources/headfoot/footer.php" ?>