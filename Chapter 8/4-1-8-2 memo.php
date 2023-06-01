<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 8 , Number 2 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
    </head>
    <body>
        <form action=memo_insert.php method=post>
            <input type=text name='name' value='이름' size=12 maxlength=12>,
            <input type=password name='pass' size=8 maxlength=20> :
            <input type=text name='memo' value='memo' size=50 maxlength=50>
            <input type=submit value='o.k'>
        </form>
        <?
            $connect = mysql_connect("localhost", "nzin", "1234");
            mysql_select_db("nzin_db", $connect);

            $sql = "select * from memoboard where linkno = 0 order by reg_date desc";
            $result = mysql_query($sql);

            while($row = mysql_fetch_array($result))
            {
                $date = date("m-d h:i:s", $row[reg_date]);
                
                echo $row[name]." : ".$row[memo];
                echo "<font size=2 color=999999>[".$date."]</font>";
                echo "<a href='memo_add.php?linkno=$row[num]'>+</a>";
                echo "<a href=delete.php?no=".$row[num].">-</a>";
                echo "<hr>";

                // 댓글 작성에 대한 목록
                $sql2 = "select * from memoboard where linkno = $row[num] order by reg_date";
                $result2 = mysql_query($sql2);

                while($row2 = mysql_fetch_array($result2))
                {
                    $date2 = date("m-d h:i:s", $row2[reg_date]);

                    echo "&nbsp; →".$row2[name]." : ".$row2[memo];
                    echo "<font size=2 color=999999>[".$date2."]</font>";
                    echo "<a href=delete.php?no=".$row2[num].">-</a>";
                    echo "<hr>";
                }
            }

            mysql_close($connect);
        ?>
    </body>
</html>
