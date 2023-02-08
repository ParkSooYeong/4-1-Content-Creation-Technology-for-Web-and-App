<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 4 , Number 2 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <?
            // array() 함수를 이용한
            // 20개 점수 합계와 평균 계산

            $score = array(87, 76, 98, 87, 87, 93, 79, 85, 88, 63, 74, 84, 93, 89, 63, 99, 81, 70, 80, 95);

            $sum = 0;

            for($a = 0; $a < 20; $a++)
            {
                $sum = $sum + $score[$a]; // 점수의 누적 합
            }

            $avg = $sum / 20; // 평균 계산

            echo "20개 점수 : ";

            for($a = 0; $a < 20; $a++)
            {
                echo $score[$a]." "; // 입력된 점수 출력
            }

            echo "<br>"; // 행바꿈

            echo "합계 : $sum , 평균 : $avg";
        ?>
    </body>
</html>
