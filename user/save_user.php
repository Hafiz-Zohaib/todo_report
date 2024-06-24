<?php
var_dump($_POST);
include('../conn.php');
// Create connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bn = $_POST['Name'];
    $yn = $_POST['Password'];
    

    $sql = "INSERT INTO `user`(`Name`, `Password`,`user_id`) VALUES ('$bn', '$yn','1')";
    echo $sql;
    if ($conn->query($sql) === TRUE) {
        header('Location:../index.php?page=2&msg=datasave');
      } else {
        header('Location:../index.php?page=2&msg=data-no-save');
      }
    
}


?>