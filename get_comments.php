<?php
$host = "sql313.infinityfree.com";
$dbname = "if0_39086780_comments_db";
$username = "if0_39086780";
$password = "pWeCR0bKlcl";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, comment, created_at FROM comments ORDER BY created_at DESC";
$result = $conn->query($sql);

$comments = [];

while ($row = $result->fetch_assoc()) {
    $comments[] = $row;
}

header('Content-Type: application/json');
echo json_encode($comments);
?>
