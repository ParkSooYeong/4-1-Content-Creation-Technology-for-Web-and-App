<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 4 , Number 3 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <?
            for($i = 0; $i < 10; $i++)
            {
                $a[$i] = $i + 1; // 배열 $a에 1 ~ 10을 저장
            }

            for($i = 9; $i >= 0; $i--)
            {
                $b[9 - $i] = $i + 1; // 배열 $b에 10 ~ 1을 저장
            }

            for($i = 0; $i < 10; $i++)
            {
                $c[$i] = $a[$i] * $b[$i]; // $a * $b를 곱한 결과 저장
            }

            for($i = 0; $i < 10; $i++)
            {
                echo "$a[$i] x $b[$i] = $c[$i]<br>";
            }
        ?>
    </body>
</html>
