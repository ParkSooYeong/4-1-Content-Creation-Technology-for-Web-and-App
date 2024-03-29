<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 11 , Number 3 -->

<? 
    session_start();
    
    $scale = 5; // 한 화면에 표시되는 글의 개수
    include "../lib/dbconn.php";
    
    $sql = "select * from memo order by num desc";
    $result = mysql_query($sql, $connect);
    $total_record = mysql_num_rows($result); // 전체 글의 개수
    
    // 전체 페이지 수($total_page) 계산
    if($total_record % $scale == 0)
    {
        $total_page = floor($total_record / $scale); 
    }
    else
    {
        $total_page = floor($total_record / $scale) + 1; 
    }
    
    if(!$page) // 페이지 번호($page)가 0일 때
    {
        $page = 1; // 페이지 번호를 1로 초기화
    }
    
    // 페이지 번호($page)에 따른 시작 레코드($start) 계산
    $start = ($page - 1) * $scale;
    $number = $total_record - $start;
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <!-- 생략 -->
    </head>
    <body>
        <!-- 생략 -->
                <div id="col2">
                    <div id="title">
                        <img src="../img/title_memo.gif">
                    </div> <!-- end of title -->
                    <div id="memo_row1">
                        <form name="memo_form" method="post" action="insert.php">
                            <div id="memo_writer">
                                <span>▷<?= $usernick ?></span>
                            </div>
                            <div id="memo1">
                                <textarea rows="6" cols="95" name="content"></textarea>
                            </div>
                            <div id="memo2">
                                <input type="image" src="../img/memo_button.gif">
                            </div>
                        </form>
                    </div> <!-- end of memo_row1-->
                    
                    <?
                        for($i=$start; $i<$start+$scale && $i<$total_record; $i++)
                        {
                            mysql_data_seek($result, $i);
                            $row = mysql_fetch_array($result);
                            
                            $memo_id = $row[id];
                            $memo_num = $row[num];
                            $memo_date = $row[regist_day];
                            $memo_nick = $row[nick];
                            $memo_content = str_replace("\n", "<br>", $row[content]);
                            $memo_content = str_replace(" ", "&nbsp;", $memo_content);
                    ?>
                    
                    <div id="memo_writer_title">
                        <ul>
                            <li id="writer_title1">
                                <?= $number ?>
                            </li>
                            <li id="writer_title2">
                                <?= $memo_nick ?>
                            </li>
                            <li id="writer_title3">
                                <?= $memo_date ?>
                            </li>
                            <li id="writer_title4">

                                <?
                                    if($userid=="admin" || $userid==$memo_id)
                                    {
                                        echo "<a href='delete.php?num=$memo_num'>[삭제]</a>";
                                    }
                                ?>
                                
                            </li>
                        </ul>
                    </div> <!-- end of memo_wirte_title -->
                    <div id="memo_content">
                        <?= $memo_content ?>
                    </div> <!-- end of memo_content -->
                    <div id="ripple">
                        <div id="ripple1">덧글</div>
                        <div id="ripple2">
                            
                            <?
                                $sql = "select * from memo_ripple where parent='$memo_num'";
                                $ripple_result = mysql_query($sql);
                                
                                while($row_ripple = mysql_fetch_array($ripple_result))
                                {
                                    $ripple_num = $row_ripple[num];
                                    $ripple_id = $row_ripple[id];
                                    $ripple_nick = $row_ripple[nick];
                                    $ripple_content = str_replace("\n", "<br>", $row_ripple[content]);
                                    $ripple_content = str_replace(" ", "&nbsp;", $ripple_content);
                                    $ripple_date = $row_ripple[regist_day];
                            ?>
                            
                            <div id="ripple_title">
                                <ul>
                                    <li>
                                        <?= $ripple_nick ?> &nbsp;&nbsp;&nbsp; <?= $ripple_date ?>
                                    </li>
                                    <li id="mdi_del">
                                        
                                        <?
                                            if($userid=="admin" || $userid==$ripple_id)
                                            {
                                                echo "<a href='delete_ripple.php?num=$ripple_num'>삭제</a>";
                                            }
                                        ?>
                                        
                                    </li>
                                </ul>
                            </div> <!-- end of ripple_title -->
                            <div id="ripple_content">
                                <?= $ripple_content ?>
                            </div>
                            
                            <?
                                } // while문 종료(97행)
                            ?>
                            
                            <form name="ripple_form" method="post" action="insert_ripple.php">
                                <input type="hidden" name="num" value="<?= $memo_num ?>">
                                <div id="ripple_insert">
                                    <div id="ripple_textarea">
                                        <textarea rows="3" cols="80" name="ripple_content"></textarea>
                                    </div> <!-- end of ripple_textarea -->
                                    <div id="ripple_button">
                                        <input type="image" src="../img/memo_ripple_button.png">
                                    </div>
                                </div> <!-- end of ripple_insert -->
                            </form>
                        </div> <!-- end of ripple2 -->
                        <div class="clear"></div>
                        <div class="linespace_10"></div>

                        <?
                            $number--;

                            } // for문 종료(62행)
                            
                            mysql_close();
                        ?>
                        
                        <div id="page_num">◀ 이전 &nbsp;&nbsp;&nbsp;&nbsp;
                            
                            <?
                                // 게시판 목록 하단에 페이지 번호 링크 출력
                                for($i=1; $i<=$total_page; $i++)
                                {
                                    if($page == $i) // 현재 페이지 번호 링크 안함
                                    {
                                        echo "<b> $i </b>";
                                    }
                                    else
                                    {
                                        echo "<a href='memo.php?page=$i'> $i </a>";
                                    }
                                }
                            ?>
                            
                            &nbsp;&nbsp;&nbsp;&nbsp;다음 ▶
                        </div> <!-- end of page_num -->
                    </div> <!-- end of ripple -->
                </div> <!-- end of col2 -->
            </div> <!-- end of content -->
        </div> <!-- end of wrap -->
    </body>
</html>
