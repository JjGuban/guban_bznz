<?php
require_once 'core/dbConfig.php';
require_once 'core/models.php';
$manga = getMangaByID($pdo, $_GET['manga_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Manga</title>
</head>
<body>
    <h1>Edit Manga</h1>
    <form action="core/handleForms.php?manga_id=<?= $_GET['manga_id'] ?>&user_id=<?= $_GET['user_id'] ?>" method="post">
        <label>Manga Title:</label>
        <input type="text" name="mangaTitle" value="<?= $manga['manga_title'] ?>" required><br>
        <label>Price:</label>
        <input type="number" step="0.01" name="price" value="<?= $manga['price'] ?>" required><br>
        <button type="submit" name="editMangaBtn">Update Manga</button>
    </form>

    <br>
    <a href="index.php">Return to Main Page</a>
</body>
</html>
