<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 12 , Number 2 -->

<?
    session_start();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta charset="euc-kr">
        <link href="../css/common.css" rel="stylesheet" type="text/css" media="all">
        <link href="../css/greet.css" rel="stylesheet" type="text/css" media="all">
    </head>
    
    <?
        include "../lib/dbconn.php";
        
        $scale = 10; // 한 화면에 표시되는 글의 개수
        
        if($mode == "search") // 검색 모드
        {
            if(!$search)
            {
                echo("
                    <script>
                        window.alert('검색할 단어를 입력해 주세요.');
                        history.go(-1);
                    </script>
                ");
                
                exit;
            }
            
            $sql = "select * from greet where $find like '%$search%' order by num desc";
        }
        else // 글 목록 보기 모드
        {
            $sql = "select * from greet order by num desc";
        }
        
        $result = mysql_query($sql, $connect);
        $total_record = mysql_num_rows($result);
        
        // 전체 페이지 수($total_page) 계산
        if($total_record % $scale == 0)
        {
            $total_page = floor($total_record / $scale);
        }
        else
        {
            $total_page = floor($total_record / $scale) + 1; 
        }

        if(!$page) // 현재 화면에 표시되는 페이지를 의미하는
        {
            $page = 1; // $page가 0이라면 1로 초기화
        }
        
        // 표시할 페이지($page)에 따라 $start 계산
        $start = ($page - 1) * $scale;
        $number = $total_record - $start;
    ?>
    
    <body>

        <!--생 략-->
        
        <form name="board_form" method="post" action="list.php?mode=search"> 
            <div id="list_search">
                <div id="list_search1">▷ 총 <?= $total_record ?> 개의 게시물이 있습니다.</div>
                <div id="list_search2">
                    <img src="../img/select_search.gif">
                </div>
                <div id="list_search3">
                    <select name="find">
                        <option value='subject'>제목</option>
                        <option value='content'>내용</option>
                        <option value='nick'>닉네임</option>
                        <option value='name'>이름</option>
                    </select>
                </div> <!-- end of list_search3 -->
                <div id="list_search4"><input type="text" name="search"></div>
                <div id="list_search5"><input type="image" src="../img/list_search_button.gif"></div>
            </div> <!-- end of list_search -->
        </form>
        <div class="clear"></div>
        <div id="list_top_title">
            <ul>
                <li id="list_title1">
                    <img src="../img/list_title1.gif">
                </li>
                <li id="list_title2">
                    <img src="../img/list_title2.gif">
                </li>
                <li id="list_title3">
                    <img src="../img/list_title3.gif">
                </li>
                <li id="list_title4">
                    <img src="../img/list_title4.gif">
                </li>
                <li id="list_title5">
                    <img src="../img/list_title5.gif">
                </li>
            </ul>		
        </div> <!-- end of list_top_title -->
        <div id="list_content">
            
            <? // 글 목록 출력	
                for($i=$start; $i<$start+$scale && $i<$total_record; $i++)
                {
                    // 가져올 레코드로 위치(포인터) 이동
                    mysql_data_seek($result, $i);

                    // 하나의 레코드 가져오기
                    $row = mysql_fetch_array($result);
                    
                    $item_num = $row[num];
                    $item_id = $row[id];
                    $item_name = $row[name];
                    $item_nick = $row[nick];
                    $item_hit = $row[hit];
                    $item_date = $row[regist_day];
                    $item_date = substr($item_date, 0, 10); 
                    $item_subject = str_replace(" ", "&nbsp;", $row[subject]);
            ?>
            
            <div id="list_item">
                <div id="list_item1">
                    <?= $number ?>
                </div>
                <div id="list_item2">
                    <a href="view.php?num= <?=$item_num?> &page= <?=$page?>">
                        <?= $item_subject ?>
                    </a>
                </div>
                <div id="list_item3">
                    <?= $item_nick ?>
                </div>
                <div id="list_item4">
                    <?= $item_date ?>
                </div>
                <div id="list_item5">
                    <?= $item_hit ?>
                </div>
            </div> <!-- end of list_item -->
            
            <?
                    $number--;
                }
            ?>
            
            <div id="page_button">
                <div id="page_num">◀ 이전 &nbsp;&nbsp;&nbsp;&nbsp;
                    
                    <?
                        // 게시판 목록 하단에 페이지 번호 출력(페이지 링크)
                        for($i=1; $i<=$total_page; $i++)
                        {
                            if($page == $i) // 현재 페이지 번호 링크 안함
                            {
                                echo "<b> $i </b>";
                            }
                            else
                            {
                                echo "<a href='list.php?page=$i'> $i </a>";
                            } 
                        }
                    ?>
                    
                    &nbsp;&nbsp;&nbsp;&nbsp; 다음 ▶
                </div> <!-- end of page_num -->
                <div id="button">
                    <a href="list.php?page=<?=$page?>"><img src="../img/list.png"></a>&nbsp;
                    
                    <?
                        if($userid)
                        {
                    ?>
                    
                    <a href="write_form.php"><img src="../img/write.png"></a>
                    
                    <?
                        }
                    ?>
                    
                    <!-- 생략 -->
                
    </body>
</html>
