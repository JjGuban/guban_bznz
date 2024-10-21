<?php
require_once 'dbConfig.php';
require_once 'models.php';

// Handling User Creation
if (isset($_POST['insertUserBtn'])) {
    $query = insertUser($pdo, $_POST['username'], $_POST['firstName'], $_POST['lastName'], $_POST['email']);
    if ($query) {
        header("Location: ../index.php");
    } else {
        echo "User insertion failed";
    }
}

// Handling User Editing
if (isset($_POST['editUserBtn'])) {
    $query = updateUser($pdo, $_POST['firstName'], $_POST['lastName'], $_POST['email'], $_GET['user_id']);
    if ($query) {
        header("Location: ../index.php");
    } else {
        echo "User update failed";
    }
}

// Handling User Deletion
if (isset($_POST['deleteUserBtn'])) {
    $query = deleteUser($pdo, $_GET['user_id']);
    if ($query) {
        header("Location: ../index.php");
    } else {
        echo "User deletion failed";
    }
}

// Handling Manga Creation
if (isset($_POST['insertMangaBtn'])) {
    $query = insertManga($pdo, $_POST['mangaTitle'], $_POST['price'], $_GET['user_id']);
    if ($query) {
        header("Location: ../viewmangas.php?user_id=" . $_GET['user_id']);
    } else {
        echo "Manga insertion failed";
    }
}

// Handling Manga Editing
if (isset($_POST['editMangaBtn'])) {
    $query = updateManga($pdo, $_POST['mangaTitle'], $_POST['price'], $_GET['manga_id']);
    if ($query) {
        header("Location: ../viewmangas.php?user_id=" . $_GET['user_id']);
    } else {
        echo "Manga update failed";
    }
}

// Handling Manga Deletion
if (isset($_POST['deleteMangaBtn'])) {
    $query = deleteManga($pdo, $_GET['manga_id']);
    if ($query) {
        header("Location: ../viewmangas.php?user_id=" . $_GET['user_id']);
    } else {
        echo "Manga deletion failed";
    }
}

?>
