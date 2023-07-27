<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
    $connect = mysql_connect("localhost","nzin","1234");
    mysql_select_db("nzin_db", $connect);

     $sql = "create table memoboard4 ( ";
     $sql .= "num int not null auto_increment, ";
     $sql .= "name text(6), ";
     $sql .= "pass varchar(20), ";
     $sql .= "memo text(100), ";
     $sql .= "linkno int not null default 0, "; 
     $sql .= "reg_date int(13) not null default 0, ";  
     $sql .= "primary key(num) )";
 
     $result = mysql_query($sql, $connect);
 
     if ($result)
         echo "데이터베이스 테이블 'memoBoard4'가 생성되었습니다!";
     else
         echo "데이터베이스 테이블 생성 에러!!!";
 
     mysql_close();
?>