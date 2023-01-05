<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 3 , Number 10 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <?
            // 2022년 01월 01일 기준으로 생년월일에 따라 만 나이 계산하기

            $now_year = 2022;
            $now_month = 1;
            $now_day = 1;

            $birth_year = 1998;
            $birth_month = 4;
            $birth_day = 14;

            if($birth_month < $now_month)
            {
                $age = $now_year - $birth_year;
            }
            else if($birth_month == $now_month)
            {
                if($birth_day <= $now_day)
                {
                    $age = $now_year - $birth_year;
                }
                else
                {
                    $age = $now_year - $birth_year - 1;
                }
            }
            else
            {
                $age = $now_year - $birth_year - 1;
            }

            echo "오늘 날짜 : $now_year 년 , $now_month 월 , $now_day 일<br>";
            echo "출생 일자 : $birth_year 년 , $birth_month 월 , $birth_day 일<br>";
            echo "만 나이 : $age 세";
        ?>
    </body>
</html>
