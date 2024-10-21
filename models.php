<?php
// User Management
function insertUser($pdo, $username, $first_name, $last_name, $email) {
    $sql = "INSERT INTO users (username, first_name, last_name, email) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$username, $first_name, $last_name, $email]);
    return $executeQuery;
}

function updateUser($pdo, $first_name, $last_name, $email, $user_id) {
    $sql = "UPDATE users SET first_name = ?, last_name = ?, email = ? WHERE user_id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$first_name, $last_name, $email, $user_id]);
}

function deleteUser($pdo, $user_id) {
    $sql = "DELETE FROM users WHERE user_id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$user_id]);
}

function getAllUsers($pdo) {
    $sql = "SELECT * FROM users";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getUserByID($pdo, $user_id) {
    $sql = "SELECT * FROM users WHERE user_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user_id]);
    return $stmt->fetch();
}

// Manga Management
function insertManga($pdo, $manga_title, $price, $user_id) {
    $sql = "INSERT INTO mangas (manga_title, price, user_id) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$manga_title, $price, $user_id]);
}

function updateManga($pdo, $manga_title, $price, $manga_id) {
    $sql = "UPDATE mangas SET manga_title = ?, price = ? WHERE manga_id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$manga_title, $price, $manga_id]);
}

function deleteManga($pdo, $manga_id) {
    $sql = "DELETE FROM mangas WHERE manga_id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$manga_id]);
}

function getAllMangas($pdo) {
    $sql = "SELECT * FROM mangas";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getMangaByID($pdo, $manga_id) {
    $sql = "SELECT * FROM mangas WHERE manga_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$manga_id]);
    return $stmt->fetch();
}

?>
