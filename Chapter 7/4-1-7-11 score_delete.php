<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 7 , Number 11 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <?
            $connect = mysql_connect("localhost", "abc", "1234");
            mysql_select_db("test_db", $connect);

            // 필드 num이 $num 값을 가지는 레코드 삭제
            $sql = "delete from stud_score where num = $num";

            mysql_query($sql, $connect);
            mysql_close($connect);

            // score_list.php로 돌아감
            Header("Location:score_list.php");
        ?>
    </body>
</html>
