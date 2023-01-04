<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 3 , Number 9 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <?
            $age = 25; // 나이 설정

            $welfare = "no";    // yes : 복지카드 소지자 , no : 미소지자
            $merit = "yes";     // yes : 국가유공자증 소지자 , no : 미소지자
            $after_1710 = "no"; // yes : 17:10 이후 입장 , no : 17:10 이전 입장

            if($age < 3) // 입장료 무료
            {
                $fee = "무료";
            }
            elseif(($age >= 3) && ($age <= 13) || ($after_1710 == "yes"))
            {
                $fee = "4,000원";
            }
            elseif(($age >= 14) && ($age <= 18) || ($age >= 70) || ($welfare == "yes") || ($merit == "yes"))
            {
                $fee = "8,000원";
            }
            else
            {
                $fee = "10,000원";
            }

            echo "복지카드 소지 : $welfare<br>";
            echo "국가유공자증 소지 : $merit<br>";
            echo "17시 10분 이후 입장 : $after_1710<br>";
            echo "나이 : $age 세<br><br>";
            echo "입장료 : $fee";
        ?>
    </body>
</html>
