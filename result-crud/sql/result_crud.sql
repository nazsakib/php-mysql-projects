-- showing localhost databses
SHOW DATABASES;

-- creating database
CREATE resultcrud;

-- use created database
USE resultcrud;

-- creating students table
CREATE TABLE studentsInfo (
    student_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(100),
    roll VARCHAR(10),
    class VARCHAR(10),
    section VARCHAR(10)
);

-- creating subject table
CREATE TABLE subjects (
    subject_id INT AUTO_INCREMENT PRIMARY KEY,
    subject1 VARCHAR(25),
    subject1 VARCHAR(25)
);

-- creating marks table
CREATE TABLE marks (
    marks_id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT,
    subject_id INT,
    marks1 INT,
    marks2 INT,
    FOREIGN key (student_id) REFERENCES studentsInfo (student_id),
    FOREIGN key (subject_id) REFERENCES subjects (subject_id)
);

-- creating students and subjects relationship
CREATE TABLE studentsSubjects (
    student_id INT,
    subject_id INT,
    PRIMARY KEY (student_id, subject_id),
    FOREIGN key (student_id) REFERENCES studentsInfo (student_id),
    FOREIGN key (subject_id) REFERENCES subjects (subject_id)
);
