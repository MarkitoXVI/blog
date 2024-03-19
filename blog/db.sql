/*CREATE DATABASE blog_taurins;

CREATE TABLE posts(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255) NOT NULL
);

INSERT INTO posts 
(title)
VALUES
('My First Blog Post'),
('My Second Blog Post');

SELECT * FROM posts;*/


USE blog_taurins;

CREATE TABLE categories(
id INT AUTO_INCREMENT PRIMARY KEY,
NAME VARCHAR(255) NOT NULL,
DESCRIPTION TEXT
);

INSERT INTO categories (NAME) VALUES ("sport"), ("music"), ("food");

ALTER TABLE posts ADD COLUMN category_id INT;

ALTER TABLE posts ADD FOREIGN KEY (category_id) REFERENCES categories(id);

UPDATE posts SET category_id = (SELECT id FROM categories WHERE NAME = "sport") WHERE id = 1;

UPDATE posts SET category_id = (SELECT id FROM categories WHERE NAME = "food") WHERE id = 2;