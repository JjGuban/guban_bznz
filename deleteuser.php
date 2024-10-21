<?php
require_once 'core/dbConfig.php';
require_once 'core/models.php';
$user = getUserByID($pdo, $_GET['user_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete User</title>
</head>
<body>
    <h1>Are you sure you want to delete this user?</h1>
    <p>Username: <?= $user['username'] ?></p>
    <p>First Name: <?= $user['first_name'] ?></p>
    <p>Last Name: <?= $user['last_name'] ?></p>
    <p>Email: <?= $user['email'] ?></p>

    <form action="core/handleForms.php?user_id=<?= $_GET['user_id'] ?>" method="post">
        <button type="submit" name="deleteUserBtn">Delete User</button>
    </form>

    <br>
    <a href="index.php">Return to Main Page</a>
</body>
</html>
