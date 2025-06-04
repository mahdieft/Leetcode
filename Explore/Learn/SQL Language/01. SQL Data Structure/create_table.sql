CREATE SCHEMA 'my_schema' CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE `my_schema`.`my_table`
(
    `id` INT NOT NULL COMMENT 'This is a primary index',
    PRIMARY KEY (`id`)
);

SHOW FULL COLUMNS FROM `my_schema`.`my_table`;

DROP TABLE `my_schema`.`my_table`;
TRUNCATE `my_schema`.`my_table`;
