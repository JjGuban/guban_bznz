<?php
require_once 'core/dbConfig.php';
require_once 'core/models.php';
$users = getAllUsers($pdo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manga Store Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }
        .container {
            width: 90%;
            margin: auto;
        }
        .form-container {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        label, input {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
        input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            cursor: pointer;
            border: none;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        td a {
            color: #007bff;
            text-decoration: none;
        }
        td a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome to the Manga Store Dashboard</h2>
        <h2>List of Users</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['user_id'] ?></td>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['first_name'] ?></td>
                    <td><?= $user['last_name'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td>
                        <a href="viewmangas.php?user_id=<?= $user['user_id'] ?>">View Mangas</a> |
                        <a href="edituser.php?user_id=<?= $user['user_id'] ?>">Edit</a> |
                        <a href="deleteuser.php?user_id=<?= $user['user_id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <div class="form-container">
            <h2>Add New User</h2>
            <form action="core/handleForms.php" method="post">
                <label>Username:</label>
                <input type="text" name="username" required><br>
                <label>First Name:</label>
                <input type="text" name="firstName" required><br>
                <label>Last Name:</label>
                <input type="text" name="lastName" required><br>
                <label>Email:</label>
                <input type="email" name="email" required><br>
                <button type="submit" name="insertUserBtn">Add User</button>
            </form>
        </div>
    </div>
</body>
</html>
