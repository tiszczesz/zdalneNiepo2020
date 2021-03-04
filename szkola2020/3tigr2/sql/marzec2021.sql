Create database Kl3ti_gr2_cw1 character set utf8 collate utf8_polish_ci;
use Kl3ti_gr2_cw1;
show tables;

show tables;

Create Table A(
    id int primary key auto_increment,
    nameA varchar(20),
    kluczB int
);
describe a;

Create Table B(
    id int primary key auto_increment,
    nameB varchar(20),
    kluczA int
);
insert into a(nameA,kluczB) Values('AA',1);
insert into a(nameA,kluczB) Values('AB',1);
insert into a(nameA,kluczB) Values('AC',2);
insert into a(nameA,kluczB) Values('AD',3);

insert into b(nameB,kluczA) Values('BA',2);
insert into b(nameB,kluczA) Values('BB',2);
insert into b(nameB,kluczA) Values('BC',3);
insert into b(nameB,kluczA) Values('BD',3);
delete from b;

select * From a;

select * From b;

SELECT a.id as aid ,a.nameA,kluczB,b.id as bid, nameB,kluczA   From a cross join b;

SELECT a.id as aid ,a.nameA,kluczB,b.id as bid, nameB,kluczA   
      From a inner join b on kluczB=b.id;

SELECT a.id as aid ,a.nameA,kluczB,b.id as bid, nameB,kluczA   
      From a inner join b on kluczA=a.id;

--todo left i right join