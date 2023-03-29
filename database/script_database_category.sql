CREATE DATABASE IF NOT EXISTS ZAFIRO_PRUEBA_BD;

USE ZAFIRO_PRUEBA_BD;

CREATE TABLE `CATEGORY`(
    `id` INT(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`name` VARCHAR(255) NOT NULL,
	`slug` VARCHAR(255) NOT NULL,
	`created_at` DATETIME DEFAULT NULL,
	`updated_at` DATETIME DEFAULT NULL,
    `status` INT(255) NOT NULL
);

INSERT INTO CATEGORY (id, name, slug, created_at, updated_at, status) VALUES (NULL, 'Celulares', 'celulares', NOW(), NULL, 1);
INSERT INTO CATEGORY (id, name, slug, created_at, updated_at, status) VALUES (NULL, 'Laptops', 'laptops', NOW(), NULL, 1);
INSERT INTO CATEGORY (id, name, slug, created_at, updated_at, status) VALUES (NULL, 'Mochilas', 'mochilas', NOW(), NULL, 1);