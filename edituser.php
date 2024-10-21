<?php
require_once 'core/dbConfig.php';
require_once 'core/models.php';
$user = getUserByID($pdo, $_GET['user_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form action="core/handleForms.php?user_id=<?= $_GET['user_id'] ?>" method="post">
        <label>First Name:</label>
        <input type="text" name="firstName" value="<?= $user['first_name'] ?>" required><br>
        <label>Last Name:</label>
        <input type="text" name="lastName" value="<?= $user['last_name'] ?>" required><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?= $user['email'] ?>" required><br>
        <button type="submit" name="editUserBtn">Update User</button>
    </form>
    
    <br>
    <a href="index.php">Return to Main Page</a>
</body>
</html>
