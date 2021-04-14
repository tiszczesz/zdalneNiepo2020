show tables;

CREATE TABLE funkcje(
    id int primary key auto_increment,
    nazwa varchar(50),
    opis varchar(100)
)

-- drop table prac_fun;
CREATE TABLE prac_fun(
    id int primary key auto_increment,
    prac_id int ,
    fun_id int,
    CONSTRAINT FK_prac FOREIGN KEY (prac_id) REFERENCES pracownik(Id),
    CONSTRAINT `FK_fun` FOREIGN KEY (`fun_id`) REFERENCES `funkcje` (`id`)
);
-- ALTER TABLE `prac_fun`
--   ADD CONSTRAINT `FK_fun` FOREIGN KEY (`fun_id`) REFERENCES `funkcje` (`id`)

show create table prac_fun;

INSERT INTO funkcje(nazwa) values('asystent/ka');
INSERT INTO funkcje(nazwa) values('kierowca');
INSERT INTO funkcje(nazwa) values('kierownik');
INSERT INTO funkcje(nazwa) values('portier');

select * from pracownik;
INSERT INTO prac_fun(prac_id,fun_id) values(1,2);
INSERT INTO prac_fun(prac_id,fun_id) values(1,4);