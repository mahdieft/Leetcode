SELECT *
FROM `my_schema`.`users`
WHERE age < 40
  AND height > 160;

SELECT *
FROM `my_schema`.`users`
WHERE age < 40
   OR height > 160;

SELECT *
FROM `my_schema`.`users`
WHERE id < 4
  AND (age > 30 OR height > 175);
