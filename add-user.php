
<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $street = $_POST['street'];
    $isAdmin = isset($_POST['isAdmin']) ? 1 : 0;
    $isVerifed = isset($_POST['isVerifed']) ? 1 : 0;
    $Membership=$_POST['Membership'];
    $sql = "INSERT INTO user (username, email, phoneno, street, isAdmin, isVerifed, Membership) VALUES ('$username', '$email', '$phoneno', '$street', '$isAdmin', '$isVerifed', '$Membership')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: users.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
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
    <link rel="stylesheet" href="./test1.css">
    <title>Add User</title>
</head>
<body>
    <header>
        <h1>Add User</h1>
    </header>
    <div class="edit-user-form">
        <form action="" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">password:</label>
            <input type="password" id="password" name="password" required>
            
            <label for="phoneno">Phone Number:</label>
            <input type="text" id="phoneno" name="phoneno" required>
            
            <label for="street">Street:</label>
            <input type="text" id="street" name="street" required>
            

            <label for="isAdmin">Is Admin:</label>
            <input type="text" id="isAdmin" name="isAdmin" required>

            <label for="Membership">Membership:</label>
            <input type="text" id="Membership" name="Membership" required>
            
            <button type="submit">Add User</button>
        </form>
    </div>
</body>
</html>
