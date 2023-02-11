<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 4 , Number 4 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <?
            // 2차원 배열을 이용하여 3 배열의 합계와 평균 계산
            $score = array(array(88, 98, 96, 77, 63)
                        , array(86, 77, 66, 86, 93)
                        , array(74, 83, 95, 86, 97));

            // 입력된 수와 배열의 인덱스 출력
            for($i = 0; $i < 3; $i++)
            {
                for($j = 0; $j < 5; $j++)
                {
                    echo "\$score[$i][$j] = ".$score[$i][$j]."<br>";
                }

                echo "<br>";
            }

            // 각 배열의 합계와 평균
            for($i = 0; $i < 3; $i++)
            {
                $sum = 0;

                for($j = 0; $j < 5; $j++)
                {
                    $sum = $sum + $score[$i][$j];
                }

                $avg = $sum / 5;
                $num = $i + 1;

                echo "$num 번째 점수 => 합계 : $sum , 평균 : $avg <br>";
            }
        ?>
    </body>
</html>
