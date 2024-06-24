<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $designation = htmlspecialchars($_POST['designation']);
    $emp_id = htmlspecialchars($_POST['emp_id']);

    // Display the collected data (In a real application, you would save this data to a database)
    echo "<h2>User Information</h2>";
    echo "Name: " . $name . "<br>";
    echo "Designation: " . $designation . "<br>";
    echo "Employee ID: " . $emp_id . "<br>";
} else {
    echo "Invalid request method.";
}
?>
