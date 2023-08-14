-- Active: 1683654685914@@127.0.0.1@3306@demo
CREATE DATABASE demo;
use demo;
CREATE TABLE Marque(
        id INT PRIMARY KEY AUTO_INCREMENT,
        libelle VARCHAR (50) NOT NULL
      
    );
INSERT INTO Marque (libelle) VALUES('Khadija');
DESC Marque;
SELECT *FROM `Marque`;
