/* SKU CoE ITE - ParkSooYoung */
/* Grade 4 , Semester 1 , Chapter 6 , Number 1 */

mysql -uabc -p1234 test_db

create database sample1;

show databases;

drop database sample1;

create table sample_test (
    num int not null,
    name char(10),
    address char(80),
    tel char(20),
    email char(20),
    primary key(num)
);

desc sample_test;

alter table sample_test add age int;

desc sample_test;

alter table sample_test drop email;
alter table sample_test drop age;

desc sample_test;

alter table sample_test change tel phone int;
alter table sample_test modify name int;
alter table sample_test rename test_sample;

drop table test_sample;

show tables;
