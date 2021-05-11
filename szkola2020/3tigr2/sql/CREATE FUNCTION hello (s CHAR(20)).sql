 CREATE FUNCTION hello (s CHAR(20))
 RETURNS CHAR(50) DETERMINISTIC
       RETURN CONCAT('Hello, ',s,'!');


SELECT hello('Misio puszysty');

show create function hello;

CREATE FUNCTION hello2(imie VARCHAR(50),nazwisko VARCHAR(50))
RETURNS VARCHAR(200) DETERMINISTIC
   BEGIN

   END
    RETURN CONCAT('Witaj: ',LEFT(imie,1),'. ',nazwisko);
DROP FUNCTION hello2;
SELECT hello2(Imie,Nazwisko) as 'powitanie' FROM `pracownik` ;
