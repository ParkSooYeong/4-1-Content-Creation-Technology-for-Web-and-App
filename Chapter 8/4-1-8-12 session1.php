<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 8 , Number 12 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
    </head>
    <body>
        <?
            session_start();

            echo "세션 시작<p>";

            $_SESSION['userid'] = "sypark";
            $_SESSION['username'] = "박수영";
            $_SESSION['time'] = time(); // time()은 현재 시간

            echo "3개의 세션 변수 등록 완료<br>";
            
            echo $_SESSION['userid']."<br>";
            echo $_SESSION['username']."<br>";
            echo $_SESSION['time']."<br>";
        ?>
    </body>
</html>
