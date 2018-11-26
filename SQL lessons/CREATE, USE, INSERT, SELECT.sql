CREATE DATABASE IF not exists `my_database`
use `my_database`

CREATE TABLE IF NOT EXISTS `maqolalar`
(
	`id` INT NOT NULL primary key auto_increment,
    `nom` VARCHAR(128) NOT NULL,
    `rasm` VARCHAR(128) NOT NULL,
    `vaqt` DATETIME NOT NULL,
    `content` TEXT NOT NULL
);


INSERT INTO maqolalar(`nom`, `rasm`, `vaqt`, `content`) 
VALUES('Kun yangiliki', '/uploads/image1.jpg', '2018-11-24 16:00:00', 'Lorem ipsum dolor sit');
INSERT INTO maqolalar(`nom`, `rasm`, `vaqt`, `content`) 
VALUES('Bogdoda hamma yoq tinch', '/uploads/bagdad.jpg', NOW(), 'Loremlar ipsumlar sitlar');
INSERT INTO maqolalar(`nom`, `rasm`, `vaqt`, `content`) 
VALUES('Lorem yangiliklar', '/uploads/news.jpg', NOW(), 'Textlar Azizlar, Jalollar');
 

SELECT * FROM `maqolalar`