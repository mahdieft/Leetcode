CREATE SCHEMA 'my_schema' CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE `my_schema`.`users`
(
    `id`   INT         NOT NULL AUTO_INCREMENT COMMENT 'This is the primary index',
    `name` VARCHAR(45) NOT NULL DEFAULT 'N/A',
    PRIMARY KEY (`id`)
);

ALTER TABLE `my_schema`.`users`
    ADD COLUMN `age` INT NULL AFTER `name`;

ALTER TABLE `my_schema`.`users`
    CHANGE COLUMN `id` `id` INT(11) NOT NULL AUTO_INCREMENT,
    CHANGE COLUMN `name` `user_name` VARCHAR(45) NOT NULL DEFAULT 'No Name';
