CREATE TABLE `users` (
  `id` int PRIMARY KEY  AUTO_INCREMENT NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` VARCHAR (50) UNIQUE KEY NOT NULL,
  `password` VARCHAR(80) NOT NULL,
  `image` VARCHAR(80),
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP()
  );


INSERT INTO `users` 
  (`name`, `email`, `password`, `image`) 
  VALUES (
    "Admin", 
    "admin@site",
    "$2y$10$8VPoCLb5yWbObv7BtvgkmuosuqSDGi5CYb.Xh5mENcncL6Z7nNmwe",
    'images/defaults/user_icon.png'
    );

CREATE TABLE `contacts` (
  `id` int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `email` varchar(80) NOT NULL,
  `mensagem` TEXT NOT NULL,
  `status` ENUM("delivered","error") DEFAULT "delivered",
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP()
)