<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 3 , Number 25 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <h3>▶ 구구단 표</h3>
        <table border='1' width='700'>
            <tr bgcolor='#ccccc' align='center'>
                <td>2단</td>
                <td>3단</td>
                <td>4단</td>
                <td>5단</td>
                <td>6단</td>
                <td>7단</td>
                <td>8단</td>
                <td>9단</td>
            </tr>

            <?
                for($b = 1; $b <= 9; $b++)
                {
                    echo "<tr align='center'>";

                    for($a = 2; $a <= 9; $a++)
                    {
                        $c = $a * $b;

                        echo "<td>{$a} x {$b} = $c</td>";
                    }

                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>
