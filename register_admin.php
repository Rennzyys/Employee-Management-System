<?php
// Establish a connection to your MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$database = "employee";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT id, email, password, is_admin FROM informations WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Verify the password
    if ($password == $row['password']) {
        if ($row['is_admin'] == 1) {
            header("Location: dashboard_admin.php?success=1");
            exit();
        } else {
            header("Location: dashboard_admin.php?success=1"); // Redirect to user dashboard
            exit();
        }
    } else {
        header("Location: admin_signin.php?error=Incorrect password");
        exit();
    }
} else {
    header("Location: admin_signin.php?error=User not found");
    exit();
}

$conn->close();
?>


