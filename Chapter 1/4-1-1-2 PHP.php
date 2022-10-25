<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 1 , Number 2 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!-- charset=euc-kr -->
        <title>5과목 점수의 합계와 평균</title>
    </head>
    <body>
        <table border=1>
            <tr>
                <td>국어 : 80</td>
            </tr>
            <tr>
                <td>영어 : 90</td>
            </tr>
            <tr>
                <td>수학 : 100</td>
            </tr>
            <tr>
                <td>사회 : 70</td>
            </tr>
            <tr>
                <td>과학 : 100</td>
            </tr>
            <tr>
                <td>합계 : 440</td>
            </tr>
            <tr>
                <td>평균 : 88</td>
            </tr>
        </table>

        <br>
        <hr>
        <br>

        <?
            $kor = 80;
            $eng = 90;
            $math = 100;
            $soc = 70;
            $sci = 100;

            $sum = $kor + $eng + $math + $soc + $sci;
            $avg = $sum / 5;

            echo
            "<table border='1'>
                <tr>
                    <td>국어 : $kor</td>
                </tr>
                <tr>
                    <td>영어 : $eng</td>
                </tr>
                <tr>
                    <td>수학 : $math</td>
                </tr>
                <tr>
                    <td>사회 : $soc</td>
                </tr>
                <tr>
                    <td>과학 : $sci</td>
                </tr>
            </table>";
        ?>

        <br>
        <hr>
        <br>

        <?
            phpinfo();
        ?>
    </body>
</html>
