<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $conn = new mysqli($servername, $username, $password,'test') or die ("unable to connect to server");
  $sql = mysqli_select_db ($conn,"test") or die ("unable to connect to database");
  $sql = "INSERT INTO registration (firstN,lastN,password1,password2,email)";
?>