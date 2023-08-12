<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($password != $confirmPassword) {
        // Passwords don't match
        header("Location: register.php?error=password");
        exit();
    }

    // Replace with your database connection details
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "web";

    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (Username, Password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $hashedPassword);

    if ($stmt->execute()) {
        header("Location: index1.php?success=true");
    } else {
        header("Location: register.php?error=database");
    }

    $stmt->close();
    $conn->close();
}
?>
