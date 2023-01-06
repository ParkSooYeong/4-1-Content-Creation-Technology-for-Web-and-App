<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 3 , Number 11 -->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <?
            /* 초등학교에서 학년 별로 임의의 비용을 계산하는 프로그램
            1학년 : 30000원
            2학년 : 35000원
            3학년 : 40000원
            4학년 : 45000원
            5학년 : 50000원
            6학년 : 55000원 */

            $a = 3; // 학년 설정

            switch($a)
            {
                case 1:
                    echo "$a 학년 비용 : 30000원";
                    break;
                case 2:
                    echo "$a 학년 비용 : 35000원";
                    break;
                case 3:
                    echo "$a 학년 비용 : 40000원";
                    break;
                case 4:
                    echo "$a 학년 비용 : 45000원";
                    break;
                case 5:
                    echo "$a 학년 비용 : 50000원";
                    break;
                case 6:
                    echo "$a 학년 비용 : 55000원";
                    break;
                default:
                    echo "학년을 잘못 입력하셨습니다.";
                    break;
            }
        ?>
    </body>
</html>
