<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM user WHERE user_id = $id";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: users.php");
    } else {
        echo "Error deleting user: " . $conn->error;
    }
}

$conn->close();
?>