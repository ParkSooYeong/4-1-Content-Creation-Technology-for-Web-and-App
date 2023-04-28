<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 7 , Number 2 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <?
            $connect = mysql_connect("localhost", "abc", "1234");

            mysql_select_db("test_db", $connect);

            $sql = "insert into card (num, name, company, tel, hp, address)";
            $sql .= "values (1, '박수영', '삼성전자', '010-1234-5678', ";
            $sql .= "010-9101-1121', '경기도 안산시 단원구 와동')";

            $result = mysql_query($sql);

            if($result)
            {
                echo "레코드 삽입 완료";
            }
            else
            {
                echo "레코드 삽입 실패, 에러 확인 요망";
            }

            mysql_close($connect);
        ?>
    </body>
</html>
