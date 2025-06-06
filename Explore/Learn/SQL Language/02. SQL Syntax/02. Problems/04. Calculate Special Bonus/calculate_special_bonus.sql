SELECT employee_id,
       IF(employee_id % 2 = 1 AND name NOT REGEXP '^M', salary, 0) AS bonus
FROM employees
ORDER BY employee_id;


-- OR

SELECT employee_id,
       CASE
           WHEN name NOT LIKE 'M%' AND employee_id % 2 = 1 THEN salary
           ELSE 0
       END AS bonus
FROM employees
ORDER BY employee_id;
