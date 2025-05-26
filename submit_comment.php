<?php
$host = "sql313.infinityfree.com";
$dbname = "if0_39086780_comments_db";
$username = "if0_39086780";
$password = "pWeCR0bKlcl";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if POST data is set
if (isset($_POST['name']) && isset($_POST['comment'])) {
    $name = htmlspecialchars($_POST['name']);
    $comment = htmlspecialchars($_POST['comment']);

    $sql = "INSERT INTO comments (name, comment) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $name, $comment);
    
    if ($stmt->execute()) {
        header("Location: projects.html");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "No data received.";
}

$conn->close();

header("Location: projects.html");
?>
