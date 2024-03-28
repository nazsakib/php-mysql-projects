CREATE DATABASE gradecrud;

USE gradecrud;

CREATE TABLE grade (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(50),
    degree VARCHAR(20),
    cgpa VARCHAR(10)
);