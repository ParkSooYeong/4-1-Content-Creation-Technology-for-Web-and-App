<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 3 , Number 6 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <?
            $test1 = 95;  // 획득한 첫 번째 점수
            $test2 = 90;  // 획득한 두 번째 점수
            $test3 = 100; // 획득한 세 번째 점수

            $test1_cut = 70; // 첫 번째 기준 점수
            $test2_cut = 80; // 두 번째 기준 점수
            $test3_cut = 90; // 세 번째 기준 점수

            echo "시험 합격 기준은<br>";
            echo "첫 번째 시험 점수 $test1_cut 점 이상,<br>";
            echo "두 번째 시험 점수 $test2_cut 점 이상,<br>";
            echo "세 번째 시험 점수 $test3_cut 점 이상입니다.<br><br>";

            echo "획득한 첫 번째 시험 점수 : $test1 점 , 두 번째 시험 점수 : $test2 점 , 세 번째 시험 점수 : $test3 점<br><br>";

            if(($test1 >= $test1_cut) && ($test2 >= $test2_cut) && ($test3 >= $test3_cut))
            {
                echo "합격입니다.";
            }
            else
            {
                echo "불합격입니다.";
            }
        ?>
    </body>
</html>
