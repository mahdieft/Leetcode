SELECT *
FROM `my_schema`.`users`
WHERE `id` IN (1, 3);

SELECT *
FROM `my_schema`.`users`
WHERE id NOT IN (1, 4);

SELECT *
FROM `my_schema`.`users`
WHERE height BETWEEN 160 AND 190;
