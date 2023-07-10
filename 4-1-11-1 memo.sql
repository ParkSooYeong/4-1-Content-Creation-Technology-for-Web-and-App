/* SKU CoE ITE - ParkSooYoung */
/* Grade 4 , Semester 1 , Chapter 11 , Number 1 */

create table memo (
    num int not null auto_increment,
    id char(15) not null,
    name char(10) not null,
    nick char(10) not null,
    content text not null,
    regist_day char(20),
    primary key(num)
);
