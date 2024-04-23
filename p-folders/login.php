<?php
// Connect to the database
$conn = new mysqli('localhost', 'username', 'password', 'social_media');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input
$username = $_POST['username'];
$password = $_POST['password'];

// Retrieve the user from the database
$stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->bind_result($id, $hashed_password);

if ($stmt->fetch()) {
    // Check the password
    if (password_verify($password, $hashed_password)) {
        // Password is correct, log the user in
        session_start();
        $_SESSION['user_id'] = $id;
        echo "Login successful";
    } else {
        // Invalid password
        echo "Invalid password";
    }
} else {
    // User not found
    echo "User not found";
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
