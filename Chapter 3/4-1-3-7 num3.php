<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 3 , Number 7 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <?
            $a = 3;
            $b = 6;
            $c = 9;

            if($a > $b) // $a가 $b보다 큰 경우
            {
                if($a > $c) // $a가 $c보다 크다면
                {
                    $max1 = $a; // 가장 큰 수 $max1은 $a다

                    if($b > $c) // $b와 $c 비교
                    {
                        $max2 = $b; // 두 번째 큰 수 $max2는 $b
                        $max3 = $c; // 세 번째 큰 수 $max3는 $c
                    }
                    else
                    {
                        $max2 = $c;
                        $max3 = $b;
                    }
                }
                else // $a가 $b보다 큰 상태에서, $c가 $a보다 크다면
                {
                    $max1 = $c; // $c가 가장 크고
                    $max2 = $a; // $a가 그 다음
                    $max3 = $b; // $b가 가장 작다
                }
            }
            else // $b가 $a보다 큰 경우
            {
                if($a > $c) // $a와 $c 비교
                {
                    $max1 = $b;
                    $max2 = $a;
                    $max3 = $c;
                }
                else // $c가 $a보다 크다면
                {
                    if($b > $c) // $b와 $c 중에 가장 큰 수가 있으므로
                    {
                        $max1 = $b; // $b가 가장 크고
                        $max2 = $c; // $c가 그 다음
                        $max3 = $a; // $a가 가장 작다
                    }
                    else
                    {
                        $max1 = $c;
                        $max2 = $b;
                        $max3 = $a;
                    }
                }
            }

            echo "입력된 세 정수 : $a $b $c<br>";
            echo "입력된 정수를 큰 순서대로 배열 : $max1 $max2 $max3<br>";
        ?>
    </body>
</html>
