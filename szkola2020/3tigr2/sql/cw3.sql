use sakila;
SHOW  tables;
--selekcja
SELECT * FROM  actor LIMIT 50;
--projekcja
SELECT first_name,last_name FROM actor;
SELECT CONCAT(first_name," ",last_name) FROM actor;
SELECT 3+45;
SELECT 45/34;