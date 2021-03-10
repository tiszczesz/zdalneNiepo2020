use sakila;
SHOW  tables;
--selekcja
SELECT * FROM  actor LIMIT 50;
--projekcja
SELECT first_name,last_name FROM actor;
SELECT CONCAT(first_name," ",last_name) FROM actor;
SELECT 3+45;
SELECT 45/34;
--złączenie
SELECT a.id as aid ,a.nameA,kluczB,b.id as bid, nameB,kluczA   
      From a 
      inner join b 
      on kluczA=a.id;