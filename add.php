<?php
// Check if the request is a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the POST request
    $id = $_POST['id']; // Assuming you are sending the ID via AJAX for editing existing records
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $age = $_POST['age'];

    // Establish a database connection (modify these credentials based on your database configuration)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "employee";

    $conn = new mysqli($servername, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if ID exists, if it does, update the existing record; otherwise, insert a new record
    if ($id) {
        // Update existing record
        $sql = "UPDATE employee_details SET firstname='$firstName', lastname='$lastName', phone='$phone', address='$address', age='$age' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        // Insert new record
        $sql = "INSERT INTO employee_details (firstname, lastname, phone, address, age) VALUES ('$firstName', '$lastName', '$phone', '$address', '$age')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
} else {
    // Handle the case where the request method is not POST (optional)
    echo "Invalid request method";
}
?>
