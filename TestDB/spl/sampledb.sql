<<<<<<< HEAD
drop database if exists sampledb;
create database sampledb;
use sampledb;

create table sample_table(No int,name varchar(50),age int,Mail varchar(50));

insert into sample_table values(1,"Yamada",21,"xxx@yahoo.co.jp");
insert into sample_table values(2,"Sato",39,"yyy@google.com");
=======
drop database if exists sampledb02;
create database sampledb02;
use sampledb02;

create table sample_table(
No int,name varchar(50),age int,Mail varchar(50));

insert into sample_table values(1,"Yamada",21,"xxx@yahoo.co.jp");
insert into sample_table values(2,"Sato",39,"yyy@google.com");
>>>>>>> 7341e2dcfa804fa60723ebdcfb3378bf63bb9dac
insert into sample_table values(3,"Harada",44,"zzz@yahoo.co.jp");