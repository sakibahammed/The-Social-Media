<?php
// Connect to the database
$conn = new mysqli('localhost', 'username', 'password', 'social_media');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input
$content = $_POST['content'];
$author_id = $_SESSION['user_id']; // Assuming you are using session-based authentication

// Insert the post into the database
$stmt = $conn->prepare("INSERT INTO posts (content, author_id) VALUES (?, ?)");
$stmt->bind_param("si", $content, $author_id);

if ($stmt->execute()) {
    $post_id = $stmt->insert_id;
    echo "Post created successfully";

    // Insert the relationship between the user and the post in the user_posts table
    $stmt_relationship = $conn->prepare("INSERT INTO user_posts (user_id, post_id) VALUES (?, ?)");
    $stmt_relationship->bind_param("ii", $author_id, $post_id);
    $stmt_relationship->execute();
    $stmt_relationship->close();
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
