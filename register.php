<?php
// Establish a connection to your MySQL database
$servername = "localhost"; // Change this to your MySQL server hostname
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "employee"; // Change this to your MySQL database name

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT id, email, password FROM informations WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    if ($password == $row['password']) {
        header("Location: employee_dashboard.php?success=1");
        exit();
    } else {
        // Redirect with error message for incorrect password
        header("Location: signinn.php?error=incorrect_password");
        exit();
    }
} else {
    // Redirect with error message for user not found
    header("Location: signinn.php?error=user_not_found");
    exit();
}

$conn->close();
?>


