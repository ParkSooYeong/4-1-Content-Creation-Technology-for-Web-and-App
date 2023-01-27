<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 3 , Number 22 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <h3>▶ 게시판 목록보기</h3>
        <table border='1' width='600'>
            <tr bgcolor='#ccccc' align='center'>
                <td>번호</td>
                <td>제목</td>
                <td>글쓴이</td>
                <td>날짜</td>
            </tr>

            <?
                $num = 1;
                $name = "박수영";
                $date = "2022/03/14";

                for($i = 1; $i <= 10; $i++)
                {
                    $title = "게시판 제목 ".$num;

                    echo ("
                            <tr>
                                <td width='50' align='center'>$num</td>
                                <td>$title</td>
                                <td width='50'>$name</td>
                                <td width='80'>$date</td>
                            </tr>");

                    $num++;
                }
            ?>

        </table>
    </body>
</html>
