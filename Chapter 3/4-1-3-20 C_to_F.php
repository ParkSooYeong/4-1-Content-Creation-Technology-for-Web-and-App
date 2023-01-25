<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 3 , Number 20 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <?
            echo "------------------------------<br>";
            echo "&nbsp;&nbsp;&nbsp;섭씨&nbsp;&nbsp;&nbsp;화씨<br>";
            echo "------------------------------<br>";

            for($c = -15; $c <= 35; $c = $c + 5)
            {
                $f = ($c * 9 / 5) + 32;

                echo "&nbsp;&nbsp;&nbsp; $c &nbsp;&nbsp;&nbsp; $f<br>";
            }

            echo "------------------------------<br>";
        ?>
    </body>
</html>
