CREATE DATABASE srms;
USE srms;

CREATE TABLE students (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  roll_number VARCHAR(20) UNIQUE,
  dob DATE,
  class VARCHAR(20)
);

CREATE TABLE results (
  id INT AUTO_INCREMENT PRIMARY KEY,
  student_id INT,
  subject VARCHAR(50),
  marks INT,
  FOREIGN KEY (student_id) REFERENCES students(id) ON DELETE CASCADE
);
