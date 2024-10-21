CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    first_name VARCHAR(100),
    last_name VARCHAR(100),
    email VARCHAR(100)
);

CREATE TABLE mangas (
    manga_id INT AUTO_INCREMENT PRIMARY KEY,
    manga_title VARCHAR(100),
    price DECIMAL(10, 2),
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);
