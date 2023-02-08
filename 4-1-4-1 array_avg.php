<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 4 , Number 1 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <?
            // 배열을 이용한 다섯 과목 점수의 합계와 평균
            // 배열의 인덱스 값은 0부터 시작한다.

            $score[0] = 85;
            $score[1] = 100;
            $score[2] = 90;
            $score[3] = 80;
            $score[4] = 100;

            $sum = 0;

            for($a = 0; $a <= 4; $a++)
            {
                $sum = $sum + $score[$a];
            }

            $avg = $sum / 5;

            echo "과목 점수 : $score[0] , $score[1] , $score[2] , $score[3] , $score[4]<br>";
            echo "합계 : $sum , 평균 : $avg<br>";
        ?>
    </body>
</html>
