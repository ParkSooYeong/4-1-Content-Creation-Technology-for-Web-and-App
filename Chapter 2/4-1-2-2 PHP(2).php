<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 2 , Number 2 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title></title>
    </head>
    <body>
        문자열 출력
        <br>
        <?
            echo "반갑습니다.<br>";
            echo "행복한 하루 되세요!";
        ?>

        <br>
        <hr>
        <br>

        주석문
        <br>
        <?
            // 이 행은 주석 처리된다.
            /* 여러 행을 주석 처리할 때는
                이와 같이 한다. */
            
            echo "이 문장은 출력된다.";
        ?>

        <br>
        <hr>
        <br>

        echo문
        <br>
        <?
            echo "-------------------- <br>";
            echo "사과<br>";
            echo "오렌지<br>";
            echo "-------------------- <br>";
            ECHO "!@#$%^&*()<br>";
            ECHO "-------------------- <br>";
            ECHO "사과<br>";
            ECHO "오렌지<br>";
            ECHO "-------------------- <br>";
        ?>

        <br>
        <hr>
        <br>

        상수와 변수
        <br>
        <?
            $a = "자동차";
            echo "<br>"; // 행 바꿈
            echo $a;

            $a = "기차";
            echo "<br>"; // 행 바꿈
            echo $a;

            $a = 1000;
            echo "<br>"; // 행 바꿈
            echo $a;
        ?>

        <br>
        <hr>
        <br>

        다섯 과목 점수의 합계와 평균
        <br>
        <?
            $kor = 90;   // 국어 점수
            $math = 100; // 수학 점수
            $eng = 95;   // 영어 점수
            $soc = 85;   // 사회 점수
            $sci = 100;  // 과학 점수

            $sum = $kor + $math + $eng + $soc + $sci; // 다섯 과목 점수의 합계 계산

            echo "다섯 과목 점수의 합계 : $sum";

            $avg = $sum / 5;

            echo "다섯 과목 점수의 평균 : $avg";
        ?>

        <br>
        <hr>
        <br>

        영화관 입장료 계산
        <br>
        <?
            $child = 3000; // 청소년 입장료 3,000원
            $adult = 4000; // 성인 입장료 4,000원
            $num1 = 3;     // 청소년 매수 3매
            $num2 = 4;     // 성인 매수 4매

            $total = $child * $num1 + $adult * $num2;

            echo "청소년 입장료 : $child 원<br>";
            echo "성인 입장료 : $adult 원<br>";
            echo "청소년 : $num1 매, 성인 : $num2 매<br>";
            echo "전체 입장료 : $total 원";

            // {$total}원
        ?>

        <br>
        <hr>
        <br>

        산술 연산자
        <br>
        <?
            $a = 3;
            $b = 4;

            $a++;
            $b--;

            $b = $a * $b + 2;
            $c = $a + $b;

            echo "a : $a , b : $b , c : $c<br>";

            $c = $a % $b;
            $b = $a + 2;
            $a = $a * 3;

            echo "a : $a , b : $b , c : $c";
        ?>

        <br>
        <hr>
        <br>

        문자열 연결 연산자
        <br>
        <?
            $n1 = "010";  // 휴대폰 국번호
            $n2 = "2515"; // 휴대폰 가운데 번호
            $n3 = "8302"; // 휴대폰 끝자리 번호

            $hp = $n1."-".$n2."-".$n3; // 010-2515-8302

            echo "휴대폰 번호 : $hp";
        ?>

        <br>
        <hr>
        <br>

        대입 연산자
        <br>
        <?
            $a = 7; // $a에 7을 대입
            echo $a."<br>"; // echo "$a<br>"와 동일

            $a += 4; // $a = $a + 4와 동일
            echo $a."<br>";

            $a -= 3; // $a = $a - 3과 동일
            echo $a."<br>";

            $a *= 2; // $a = $a * 2와 동일
            echo $a."<br>";

            $a /= 5; // $a = $a / 5와 동일
            echo $a."<br>";

            $a %= 6; // $a = $a % 2와 동일
            echo $a."<br>";

            $a = "오렌지";
            $a.= "주스"; // $a = $a." 주스"와 동일
            echo $a."<br>";
        ?>
    </body>
</html>
