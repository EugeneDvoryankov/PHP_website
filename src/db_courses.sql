CREATE DATABASE coursedb;
use coursedb;

CREATE TABLE courses(
    CourseCode varchar(6) PRIMARY KEY,
    CourseName TEXT NOT NULL,
    Credits FLOAT NOT NULL
);

INSERT INTO courses(CourseCode, CourseName, Credits)
VALUES  ("TDA548", "Introductory software development", 7.5),
        ("EDA433", "Introduction to computer engineering", 7.5);

