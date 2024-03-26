-- creating database
CREATE DATABASE crudphp;

-- use created database
USE crudphp;

-- showing tables
SHOW TABLES;

-- creating table
CREATE TABLE crud (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    phone VARCHAR(15),
    password VARCHAR(255)
);

-- inserting data
INSERT INTO `crud` (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password');

-- updating data
update `crud` set id = $id, name = '$name', email = '$email', phone = '$phone', password = '$password' where id = $id;

-- deleting data
delete from `crud` where id = $id;

-- truncate table 
TRUNCATE TABLE crud; -- will reset the entire table with auto increment, new entries will be started from 1