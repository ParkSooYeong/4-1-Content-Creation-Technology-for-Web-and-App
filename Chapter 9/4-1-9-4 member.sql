/* SKU CoE ITE - ParkSooYoung */
/* Grade 4 , Semester 1 , Chapter 9 , Number 4 */

create table member (
    id char(15) not null,
    pass char(15) not null,
    name char(15) not null,
    nick char(15) not null,
    hp char(15) not null,
    email char(80),
    regist_day char(20),
    level int,
    primary key(id)
);
