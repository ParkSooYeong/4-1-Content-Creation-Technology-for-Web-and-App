<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 8 , Number 7 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
    </head>
    <body>
        <?
            $connect = mysql_connect("localhost", "nzin", "1234");
            mysql_select_db("nzin_db", $connect);

            $q = "select * from memoboard where num=$no";
            $r = mysql_fetch_array(mysql_query($q));

            if($r[pass] == $pass)
            {
                $sql = "delete from memoboard where num=$no";
                $result = mysql_query($sql);

                $sql2 = "delete from memoboard where linkno=$no";
                $result2 = mysql_query($sql2);

                if($result)
                {
                    echo "'memo'가 삭제되었습니다.";
                    //score_list.php로 돌아감
                    echo "<meta http-equiv='refresh' content='2; url=memo.php'>";
                }
                else
                {
                    echo "'memo' 삭제 에러";
                }
            }
            else
            {
                echo "'memo' 삭제 에러 , Password가 다릅니다.";
            }

            mysql_close();
        ?>
    </body>
</html>
