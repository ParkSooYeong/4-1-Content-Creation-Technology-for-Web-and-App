<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 3 , Number 5 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <?
            $num = 15;     // 대상 숫자
            $multiple = 5; // 5의 배수 여부를 판별

            if(($num % $multiple) == 0)
            {
                echo "$num 은(는) $multiple 의 배수이다.";
            }
            else
            {
                echo "$num 은(는) $multiple 의 배수가 아니다.";
            }
        ?>
    </body>
</html>
