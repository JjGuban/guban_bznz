<?php
require_once 'core/dbConfig.php';
require_once 'core/models.php';
$mangas = getAllMangas($pdo);
$user_id = $_GET['user_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Mangas</title>
</head>
<body>
    <h1>Mangas by User ID: <?= $user_id ?></h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($mangas as $manga): ?>
            <?php if ($manga['user_id'] == $user_id): ?>
                <tr>
                    <td><?= $manga['manga_id'] ?></td>
                    <td><?= $manga['manga_title'] ?></td>
                    <td><?= $manga['price'] ?></td>
                    <td>
                        <a href="editmanga.php?manga_id=<?= $manga['manga_id'] ?>&user_id=<?= $user_id ?>">Edit</a> |
                        <a href="deletemanga.php?manga_id=<?= $manga['manga_id'] ?>&user_id=<?= $user_id ?>">Delete</a>
                    </td>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>
    </table>

    <h2>Add New Manga</h2>
    <form action="core/handleForms.php?user_id=<?= $user_id ?>" method="post">
        <label>Manga Title:</label>
        <input type="text" name="mangaTitle" required><br>
        <label>Price:</label>
        <input type="number" step="0.01" name="price" required><br>
        <button type="submit" name="insertMangaBtn">Add Manga</button>
    </form>

    <br>
    <a href="index.php">Return to Main Page</a>
</body>
</html>
