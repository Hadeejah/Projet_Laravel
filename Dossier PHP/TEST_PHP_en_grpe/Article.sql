CREATE DATABASE GestionArticle;

Use GestionArticle;

CREATE TABLE
    Article(
        id INT PRIMARY KEY AUTO_INCREMENT,
        libelle VARCHAR (30) NOT NULL,
        prix INT NOT NULL CHECK(prix > 0)
    );

INSERT INTO
    Article(libelle, prix)
VALUES
('GEZTNER', 10000), ('BAZIN', 10000), ('THIOUB', 10000), ('VOILE', 10000);