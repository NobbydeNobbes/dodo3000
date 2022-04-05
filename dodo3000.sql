CREATE DATABASE dodo3000;
USE dodo3000;
CREATE TABLE beds(
    id INT PRIMARY KEY AUTO_INCREMENT,
    brand VARCHAR(20),
    name VARCHAR(50),
    size VARCHAR(20),
    price INT,
    image TEXT
);
INSERT INTO beds
(brand, name, size, price, image)
values
("EPEDA", "MATELAS Delhi", "90x190", "759", "Matelas Delhi.jpg");
INSERT INTO beds
(brand, name, size, price, image)
values
("DREAMWAY", "MATELAS Orlando", "90x190", "809", "Matelas Orlando.jpg");
INSERT INTO beds
(brand, name, size, price, image)
values
("BULTEX", "MATELAS Valenciennes", "140x190", "759", "Matelas Valenciennes.jpg");
INSERT INTO beds
(brand, name, size, price, image)
values
("EPEDA", "MATELAS Seville", "160x200", "1019", "Matelas Seville.jpg");

