<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Replace with your database connection details
    $conn = new mysqli("localhost", "root", "", "web");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT Username, Password FROM users WHERE Username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($dbUsername, $hashedPassword);
    $stmt->fetch();

    if (password_verify($password, $hashedPassword)) {
        $_SESSION['username'] = $username;
        header("Location: index1.php"); // Redirect to the dashboard
    } else {
        // Invalid login
        header("Location: index.php?error=invalid");
    }

    $stmt->close();
    $conn->close();
}
?>
