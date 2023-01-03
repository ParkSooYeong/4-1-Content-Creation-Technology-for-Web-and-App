<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 3 , Number 8 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <?
            $score = 100;

            if($score >= 95)
            {
                $grade = "A+";
            }
            elseif($score >= 90)
            {
                $grade = "A0";
            }
            elseif($score >= 85)
            {
                $grade = "B+";
            }
            elseif($score >= 80)
            {
                $grade = "B0";
            }
            elseif($score >= 75)
            {
                $grade = "C+";
            }
            elseif($score >= 70)
            {
                $grade = "C0";
            }
            elseif($score >= 65)
            {
                $grade = "D+";
            }
            elseif($score >= 60)
            {
                $grade = "D0";
            }
            else
            {
                $grade = "F";
            }

            echo "입력된 점수 : $score 점<br> 등급 : $grade";
        ?>
    </body>
</html>
