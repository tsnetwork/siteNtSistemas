CREATE DATABASE `site` 
/*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */ 
/*!80016 DEFAULT ENCRYPTION='N' */;

CREATE TABLE `contacts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `mensagem` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `status` enum('delivered','error') COLLATE utf8mb4_bin NOT NULL DEFAULT 'delivered',
  `error` varchar(100) COLLATE utf8mb4_bin DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_bin NOT NULL DEFAULT 'images/defaults/user_icon.png',
  `password` varchar(225) COLLATE utf8mb4_bin NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*
    Inserção do usuário padrão
    email: admin@sistema.dev.br
    senha: Admin@1234
*/
INSERT INTO `users`
(`name`, `email`, `image`, `password`)
VALUES('Admin', 'admin@sistema.dev.br', 'images/defaults/user_icon.png', '$2y$10$sKMqZzVopaWuQpu45bPxWef/MTDA8PAPEUNnKDkQUG9aNC/AdL8Cq');
