<?php
// Database connection credentials
$hostname = "localhost";
$username = "root";
$password = "";
$dbName = "studentmanagement1";

// Establishing connection
$conn = new mysqli($hostname, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Using prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Start a session and store username
        session_start();
        $_SESSION["username"] = $username;

        // Redirect to welcome.php upon successful login
        header("Location: admindashboard.php");
        exit();
    } else {
        // Redirect back to login.php with error message
        header("Location: loginform.php?error=1");
        exit();
    }
}

// Close the database connection
$conn->close();
?>
