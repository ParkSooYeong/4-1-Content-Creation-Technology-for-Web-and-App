<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 8 , Number 5 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
    </head>
    <body>
        <?
            $connect = mysql_connect("localhost", "nzin", "1234");
            mysql_select_db("nzin_db", $connect);

            $date = mktime();

            $sql = "insert into memoboard (name, pass, memo, linkno, reg_date)";
            $sql .= "values ('$name', '$pass', '$memo', '$linkno', '$date')";

            $result = mysql_query($sql);

            mysql_close();

            if($result)
            {
                echo "'memo' 댓글이 작성되었습니다.";

                // score_list.php로 돌아감

                echo "<meta http-equiv='refresh' content='2; url=memo.php'>";
            }
            else
            {
                echo "'memo' 댓글 작성 에러";
            }
        ?>
    </body>
</html>
