<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 8 , Number 8 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
    </head>
    <body>
        <?
            $a = setcookie("userid", "kdhong");
            $b = setcookie("username", "홍길동", time()+60);

            if($a and $b)
            {
                echo "쿠키 'userid'와 'username' 생성 완료!<br>";
                echo "쿠키 'username'은 60초(1분)간 지속됨!";
            }
        ?>
    </body>
</html>
