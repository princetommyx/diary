CREATE TABLE `users`
(
    `user_id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `user_name` varchar
(250) COLLATE utf8mb4_unicode_ci NOT NULL,
    `user_password` varchar
(250) COLLATE utf8mb4_unicode_ci NOT NULL,
    `user_email` varchar
(250) COLLATE utf8mb4_unicode_ci NOT NULL,
    `user_country` varchar
(250) COLLATE utf8mb4_unicode_ci NOT NULL,
    `user_status` tinyint
(1) NOT NULL DEFAULT '0',
    `user_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;