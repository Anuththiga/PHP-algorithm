-- Table: Employee

-- +-------------+------+
-- | Column Name | Type |
-- +-------------+------+
-- | id          | int  |
-- | salary      | int  |
-- +-------------+------+
-- Write an SQL query to report the second highest salary from the Employee table. If there is no second highest salary, the query should report null.

SELECT MAX(salary) AS secondHighestSalary FROM Employee 
WHERE salary <
(SELECT MAX(salary) FROM Employee);