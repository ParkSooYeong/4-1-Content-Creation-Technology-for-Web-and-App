mysql -uroot -papmsetup mysql

quit

/* ---------- */

mysql -uroot -papmsetup mysql

show databases;
show tables;

create database test_db;

show databases;

/* ---------- */

desc user;

select host, user, password from test_db;

insert into user (host, user, password)
values ('localhost' , 'abc' , password('1234'));

desc db;

insert into db values ('localhost' , 'test_db' , 'abc' , 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y');

flush privileges;

quit

mysql -uabc -p1234 test_db

/* ---------- */

mysql -uroot -papmsetup mysql

update user set password = password('1234')
where user = 'root';

flush privileges;

quit

mysql -uroot -p1234 mysql
