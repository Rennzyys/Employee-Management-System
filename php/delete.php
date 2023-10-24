<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "employee";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// email the form submission for adding a new row
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add'])) {
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];

    // Insert new data into the database
    $sql = "DELETE INTO informations (first, last, email) VALUES ('$first', '$last', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
