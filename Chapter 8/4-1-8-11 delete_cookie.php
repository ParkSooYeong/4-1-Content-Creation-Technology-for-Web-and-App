<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 8 , Number 11 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
    </head>
    <body>
        <?
            $a = setcookie("userid", "");
            $b = setcookie("username", "");

            if($a and $b)
            {
                echo "쿠키 'userid'와 'username' 삭제 완료";
            }
        ?>
    </body>
</html>
