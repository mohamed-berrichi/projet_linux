CREATE DATABASE IF NOT EXISTS users;
USE users;

CREATE TABLE IF NOT EXISTS admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pseudo VARCHAR(30) NOT NULL,
    mdp VARCHAR(255) NOT NULL
);

INSERT INTO admin (pseudo, mdp) VALUES ('admin_theo', 'mdpdemalade');
