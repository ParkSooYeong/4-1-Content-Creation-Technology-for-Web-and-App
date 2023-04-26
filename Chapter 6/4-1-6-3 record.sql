/* SKU CoE ITE - ParkSooYoung */
/* Grade 4 , Semester 1 , Chapter 6 , Number 3 */

create table mem (
    num int not null,
    id char(15) not null,
    name char(10) not null,
    gender char(1),
    post_num char(8),
    address char(80),
    tel char(20),
    age int,
    primary key(num)
);

insert into mem values (0, 'sypark', '박수영', 'M', '000-00', '경기도 안산시 단원구 와동', '2515-8302', 25);
insert into mem values (1, 'faker', '이상혁', 'M', '111-11', '서울특별시 강서구 가양동', '1111-1111', 27);
insert into mem values (2, 'keria', '류민석', 'M', '222-22', '부산광역시 영도구', '2222-2222', 21);
insert into mem values (3, 'gumayusi', '이민형', 'M', '333-33', '서울특별시', '3333-3333', 21);
insert into mem values (4, 'oner', '문현준', 'M', '444-44', '광주광역시 북구', '4444-4444', 21);
insert into mem values (5, 'zeus', '최우제', 'M', '555-55', '인천광역시 미추홀구 용현동', '5555-5555', 19);

/* ---------- */

show tables;

desc mem;

select * from mem;
