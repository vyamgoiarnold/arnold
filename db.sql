-- Create the Register table
CREATE TABLE Register (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    middle_name VARCHAR(30),
    surname VARCHAR(30) NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    cv_file VARCHAR(255) NOT NULL,
    facebook VARCHAR(100),
    twitter VARCHAR(100),
    instagram VARCHAR(100),
    email VARCHAR(100) NOT NULL
);

-- Create the "library" table
CREATE TABLE library (
  id INT PRIMARY KEY AUTO_INCREMENT,
  author VARCHAR(100) NOT NULL,
  title VARCHAR(100) NOT NULL,
  publisher VARCHAR(100) NOT NULL,
  publication_year INT NOT NULL

);

-- Create the Course table
CREATE TABLE Course (
    id INT PRIMARY KEY AUTO_INCREMENT,
    course_name VARCHAR(30) NOT NULL,
    course_code VARCHAR(20) NOT NULL,
    brief_course_code VARCHAR(10) NOT NULL,
    brief_course_description VARCHAR(50) NOT NULL,
    offering_department VARCHAR(100) NOT NULL,
    semester VARCHAR(20) NOT NULL,
    academic_year VARCHAR(10) NOT NULL,
    instructor_name VARCHAR(30) NOT NULL,
    result VARCHAR(10)
);

-- Insert into Register table
INSERT INTO Register (first_name, middle_name, surname, username, password, cv_file, facebook, twitter, instagram, email)
VALUES ('anord', 'gibson', 'Smith', 'johndoe', 'P@ssw0rd!', 'cv_johndoe.pdf', 'john.doe.facebook', 'john.doe.twitter', 'john.doe.instagram', 'john.doe@example.com');

-- Insert sample data into the "library" table
INSERT INTO library ( author, title, publisher, publication_year)
VALUES ('Author 1', 'Book Title 1', 'Publisher 1', 2022),
       ('Author 2', 'Book Title 2', 'Publisher 2', 2021);

-- Insert into Course table
INSERT INTO Course (course_name, course_code, brief_course_code, brief_course_description, offering_department, semester, academic_year, instructor_name, result)
VALUES ('Introduction to SQL', 'SQL101', 'INTROSQL', 'An introductory course on SQL programming', 'Computer Science', 'Fall', '2023', 'Prof. Johnson', 'A');
