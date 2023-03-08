<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 4 , Number 10 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <?
            function sum($a, $b)
            {
                $sum = 0;

                while($a <= $b)
                {
                    $sum = $sum + $a;
                    $a++;
                }

                return $sum;
            }

            $from = 1;
            $to = 100;

            $total = sum($from, $to);

            echo "$from 에서 $to 까지의 합 : $total";
        ?>
    </body>
</html>
