<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 12 , Number 4 -->

<?
    session_start();
?>

<meta charset="euc-kr">

<?
	if(!$userid)
    {
		echo("
            <script>
	     	    window.alert('로그인 후 이용해 주세요.')
	     	    history.go(-1)
            </script>
		");

		exit;
	}

	if(!$subject)
    {
		echo("
            <script>
	     	    window.alert('제목을 입력하세요.')
	     	    history.go(-1)
            </script>
		");

	 exit;
	}

	if(!$content)
    {
		echo("
            <script>
	     	    window.alert('내용을 입력하세요.')
	     	    history.go(-1)
            </script>
		");

	 exit;
	}

    $regist_day = date("Y-m-d (H:i)"); // 현재의 '년-월-일-시-분'을 저장 
    
    include "../lib/dbconn.php"; // dbconn.php 파일을 불러옴
    
    if($mode == "modify")
    {
        $sql = "update greet set subject='$subject', content='$content' where num=$num";
    }
    else
    {
        if($html_ok == "y")
        {
            $is_html = "y";
        }
        else
        {
            $is_html = "";
            $content = htmlspecialchars($content);
        }
        
        $sql = "insert into greet (id, name, nick, subject, content, egist_day, hit, is_html) ";
        $sql .= "values('$userid', '$username', '$usernick', '$subject', '$content', '$regist_day', 0, '$is_html')";
    }
    
    mysql_query($sql, $connect); // $sql에 저장된 명령 실행
    mysql_close(); // 데이터베이스 연결 끊기
    
    echo ("
        <script>
            location.href = 'list.php?page=$page';
        </script>
    ");
?>