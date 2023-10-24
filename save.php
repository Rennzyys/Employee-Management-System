<?php
// save.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from POST request
    $id = $_POST["id"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $age = $_POST["age"];

    // Perform database update (replace these lines with your database update logic)
    $servername = "localhost"; // Change this to your MySQL server hostname
    $username = "root"; // Change this to your MySQL username
    $password = ""; // Change this to your MySQL password
    $database = "employee"; // Change this to your MySQL database name

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE employee_details SET firstname='$firstname', lastname='$lastname', phone='$phone', address='$address', age='$age' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>

