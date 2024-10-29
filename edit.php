<?php
include 'db.php';

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    $sql = "SELECT * FROM user WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
    } else {
        echo "User not found.";
        exit();
    }
} else {
    echo "No user ID provided.";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $street = $_POST['street'];
    $isAdmin = isset($_POST['isAdmin']) ? 1 : 0;
    $isVerified = isset($_POST['isVerifed']) ? 1 : 0;
    $membership = $_POST['Membership'];

    $updateSql = "UPDATE user SET username = ?, email = ?, phoneno = ?, street = ?, isAdmin = ?, isVerifed = ?, Membership = ? WHERE user_id = ?";
    $stmt = $conn->prepare($updateSql);
    $stmt->bind_param("sssssisi", $username, $email, $phoneno, $street, $isAdmin, $isVerified, $membership, $userId);

    if ($stmt->execute()) {
        header("Location: users.php");
        exit();
    } else {
        echo "Error updating user: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./edit-user.css">
    <title>Edit User</title>
</head>
<body>
    <header>
        <h1>Edit User</h1>
    </header>
    <div class="edit-user-form">
        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?= htmlspecialchars($user['username']) ?>" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
            
            <label for="phoneno">Phone Number:</label>
            <input type="text" id="phoneno" name="phoneno" value="<?= htmlspecialchars($user['phoneno']) ?>" required>
            
            <label for="street">Street:</label>
            <input type="text" id="street" name="street" value="<?= htmlspecialchars($user['street']) ?>" required>
         
            <label for="isAdmin">Is Admin:</label>
            <input type="checkbox" id="isAdmin" name="isAdmin" <?= $user['isAdmin'] ? 'checked' : '' ?>>

            <label for="isVerifed">Is Verified:</label>
            <input type="checkbox" id="isVerifed" name="isVerifed" <?= $user['isVerifed'] ? 'checked' : '' ?>>

            <label for="Membership">Membership:</label>
            <input type="text" id="Membership" name="Membership" value="<?= htmlspecialchars($user['Membership']) ?>" required>
            
            <button type="submit">Save Changes</button>
        </form>
    </div>
</body>
</html>