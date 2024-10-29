<?php
include 'db.php';

$sql = "SELECT * FROM user";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="users.css">
    <title>Users Dashboard</title>
</head>
<body>
    <header>
        <h1>User Management System</h1>
        <button class="add-user-btn" onclick="location.href='add-user.php'">Add User</button>
    </header>
    <div class="sidebar">
        <a href="#"><i class="fa-solid fa-user"></i></a>
        <a href="products.php"><i class="fa-solid fa-cart-shopping"></i></a>
        <a href="orders.php"><i class="fa-solid fa-truck-ramp-box"></i></a>
    </div>
    <div class="users-container">
        <?php if ($result->num_rows > 0): ?>
            <?php while ($user = $result->fetch_assoc()): ?>
                <div class="user-row" data-user-id="<?= $user['user_id'] ?>">
                    <div class="user-info">
                        <p><strong>Name:</strong> <?= htmlspecialchars($user['username']) ?></p>
                        <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
                        <p><strong>Phone:</strong> <?= htmlspecialchars($user['phoneno']) ?></p>
                        <p><strong>Address:</strong> <?= htmlspecialchars($user['street']) ?></p>
                        <p><strong>Is Admin:</strong> <?= $user['isAdmin'] ? 'Yes' : 'No' ?></p>
                        <p><strong>Is Verified:</strong> <?= $user['isVerifed'] ? 'Yes' : 'No' ?></p>
                    </div>
                    <div class="user-actions">
                        <a href="delete-user.php?id=<?= $user['user_id'] ?>"><i class="fas fa-trash-alt"></i></a>
                        <a href="edit-user.php?id=<?= $user['user_id'] ?>"><i class="fas fa-edit"></i></a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No users found.</p>
        <?php endif; ?>
    </div>
</body>
</html>

<?php $conn->close(); ?>
