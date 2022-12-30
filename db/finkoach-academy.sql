SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE `finkoach_academy` COLLATE 'utf8_general_ci';
USE `finkoach_academy`;

CREATE TABLE `users` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`),
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reg_number` varchar(255) NOT NULL,
  `reg_date` datetime NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO users (name, phone, password, reg_number, reg_date, is_admin)
VALUES ('Your Name', 'Your Phone Number', 'Your Password - note that it will not be encrypted except you do so manually then put the encrypted version of the password in here as parameter', '1672267785215', NOW(), 1);