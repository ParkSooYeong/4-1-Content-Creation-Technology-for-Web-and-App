<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 9 , Number 6 -->

<meta charset="euc-kr">

<?
    if(!$id)
    {
        echo("아이디를 입력하세요.");
    }
    else
    {
        include "../lib/dbconn.php";

        $sql = "select * from member where id='$id'";

        $result = mysql_query($sql, $connect);
        $num_record = mysql_num_rows($result);

        if($num_record)
        {
            echo "아이디가 중복됩니다.<br>";
            echo "다른 아이디를 사용하세요.<br>";
        }
        else
        {
            echo "사용 가능한 아이디입니다.";
        }

        mysql_close();
    }
?>
