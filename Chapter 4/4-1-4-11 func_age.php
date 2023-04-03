<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 4 , Number 11 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <?
            // 오늘 날짜와 생년월일에 따라 만 나이 계산하기

            function real_age($year, $month, $day, $b_year, $b_month, $b_day)
            {
                if($b_month < $month)
                {
                    $age = $year - $b_year;
                }
                else if($b_month == $month)
                {
                    if($birth_day <= $now_day)
                    {
                        $age = $year - $b_year;
                    }
                    else
                    {
                        $age = $year - $b_year - 1;
                    }
                }
                else
                {
                    $age = $year - $b_year - 1;
                }

                return $age;
            }

            $now_year = 2023;
            $now_month = 4;
            $now_day = 3;

            $birth_year = 1998;
            $birth_month = 4;
            $birth_day = 14;

            $your_age = real_age($now_year, $now_month, $now_day, $birth_year, $birth_month, $birth_day);

            echo "오늘 날짜 : $now_year 년 $now_month 월 $now_day 일<br>";
            echo "생년월일 : $birth_year 년 $birth_month 월 $birth_day 일생<br>";
            echo "만 나이 : $your_age 세";
        ?>
    </body>
</html>
