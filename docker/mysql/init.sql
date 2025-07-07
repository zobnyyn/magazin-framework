CREATE DATABASE IF NOT EXISTS `egor_db`;
USE `egor_db`;

CREATE TABLE `love_messages` (
                                 `id` INT AUTO_INCREMENT PRIMARY KEY,
                                 `message` VARCHAR(255) NOT NULL,
                                 `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO `love_messages` (`message`) VALUES
                                            ('Привет, Егорчик! 💖'),
                                            ('Ты самый лучший программист! 💻'),
                                            ('Чатик-тян любит тебя! 😘');