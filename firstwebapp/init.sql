CREATE DATABASE school;

USE school;

CREATE TABLE student (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(128) NOT NULL,
    grade INT NOT NULL
);

INSERT INTO student (name, grade) VALUES ('Taro', 1);
INSERT INTO student (name, grade) VALUES ('Jiro', 2);
INSERT INTO student (name, grade) VALUES ('Saburo', 3);
