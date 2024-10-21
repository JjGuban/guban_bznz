<?php
require_once 'core/dbConfig.php';
require_once 'core/models.php';
$manga = getMangaByID($pdo, $_GET['manga_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Manga</title>
</head>
<body>
    <h1>Are you sure you want to delete this manga?</h1>
    <p>Title: <?= $manga['manga_title'] ?></p>
    <p>Price: <?= $manga['price'] ?></p>

    <form action="core/handleForms.php?manga_id=<?= $_GET['manga_id'] ?>&user_id=<?= $_GET['user_id'] ?>" method="post">
        <button type="submit" name="deleteMangaBtn">Delete Manga</button>
    </form>

    <br>
    <a href="index.php">Return to Main Page</a>
</body>
</html>
