<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 3 , Number 15 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <?
            $a = 2; // 2단 구구단을 의미하는 $a에 2를 입력
        ?>

        <html>
            <body>
                <h3>2단 구구단 표 만들기</h3>
                <table border="1" width="100">
        
        <?
            $b = 1;

            while($b <= 9) // $b는 1부터 9까지
            {
                $c = $a * $b;

                echo "<tr><td align='center'>$a * $b = $c</td></tr>";

                $b++; // $b 값을 1 증가
            }
        ?>

                </table>
            </body>
        </html>
    </body>
</html>
