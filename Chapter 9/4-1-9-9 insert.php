<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 9 , Number 9 -->

<meta charset="euc-kr">

<?
    $hp = $hp1."-".$hp2."-".$hp3;
    $email = $email1."@".$email2;

    $regist_day = date("Y-m-d (H:i)"); // 현재 시간(년-월-일-시-분) 저장
    $ip = $REMOTE_ADDR;                // 방문자의 IP주소 저장

    include "../lib/dbconn.php";       //dbconn.php 파일을 불러옴

    $sql = "select * from member where id='$id'";
    $result = mysql_query($sql, $connect);
    $exist_id = mysql_num_rows($result);

    if($exist_id)
    {
        echo ("
            <script>
                window.alert('해당 아이디가 존재합니다.')
                history.go(-1)
            </script>
        ");

        exit;
    }
    else // 레코드 삽입 명령을 $sql에 입력
    {
        $sql = "insert into member(id, pass, name, nick, hp, email, regist_day, level)";
        $sql .= "values('$id', '$pass', '$name', '$nick', '$hp', '$email', '$regist_day', 9)";

        mysql_query($sql, $connect); // $sql에 저장된 명령 실행
    }

    mysql_close(); // 데이터베이스 연결 끊기

    echo ("
        <script>
            location.href = '../index.php';
        </script>
    ");
?>
