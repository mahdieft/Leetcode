SELECT *
FROM `my_schema`.`users`
WHERE height IS NULL;

SELECT *
FROM `my_schema`.`users`
WHERE height IS NOT NULL;
