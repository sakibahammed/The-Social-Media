<?php
// Connect to the database
$conn = new mysqli('localhost', 'username', 'password', 'social_media');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve posts and user information from the database
$sql = "SELECT posts.id, posts.content, posts.created_at, users.username
        FROM posts
        JOIN users ON posts.author_id = users.id
        ORDER BY posts.created_at DESC";
$result = $conn->query($sql);

// Convert posts to JSON format and return
$posts = [];
while ($row = $result->fetch_assoc()) {
    $posts[] = $row;
}

echo json_encode($posts);

// Close the connection
$conn->close();
?>
