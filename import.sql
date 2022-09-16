DROP DATABASE IF EXISTS deepdive;
CREATE DATABASE deepdive;
USE deepdive;
    CREATE TABLE koelkast (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    naam varchar(255) NOT NULL,
    prijs varchar(30) NOT NULL)

    INSERT INTO koelkast(`id`, `naam`, `prijs`)
    VALUES('1', 'de super koelkast', '1598')

    INSERT INTO koelkast(`id`, `naam`, `prijs`)
    VALUES('3', 'een top koelkast', '599')