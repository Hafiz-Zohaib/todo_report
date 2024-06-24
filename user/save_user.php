<?php
var_dump($_POST);
include('../conn.php');
// Create connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Collect form data
  $name = htmlspecialchars($_POST['name']);
  $designation = htmlspecialchars($_POST['designation']);
  $emp_id = htmlspecialchars($_POST['emp_id']);
    

  $sql = "INSERT INTO user (name, designation, emp_id) VALUES ('$name', '$designation', '$emp_id')";
    echo $sql;
    if ($conn->query($sql) === TRUE) {
        header('Location:../index.php?page=0&msg=datasave');
      } else {
        header('Location:../index.php?page=3&msg=data-no-save');
      }
    
}


?>


    

