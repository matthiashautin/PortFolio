-- CREATE DATABASE PortFolio;
-- use PortFolio;
CREATE TABLE users (
    ID int PRIMARY KEY AUTO_INCREMENT,
    Nom VARCHAR(255) NOT NULL,
    Prenom VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Message VARCHAR(255) NOT NULL
);
INSERT INTO
    users (
      ID,
      Nom,
      Prenom,
      Email,
      Message,
    )
VALUES
    (
      0,
      'Hautin',
      'Matthias',
      'matthiashautin@gmail.com',
      'test'
    );