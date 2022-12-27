<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 3 , Number 3 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <?
            $write = 95;
            $practice = 90;
            $result = "불합격";

            if(($write >= 70) && ($practice >= 80))
            {
                $result = "합격";
            }

            echo "필기 점수 : $write , 실기 점수 : $practice<br>";
            echo "결과 : $result";
        ?>
    </body>
</html>
