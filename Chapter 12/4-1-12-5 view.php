<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 12 , Number 5 -->

<? 
    session_start();
    
    include "../lib/dbconn.php";
    
    $sql = "select * from greet where num=$num";
    $result = mysql_query($sql, $connect);
    
    // 하나의 레코드 가져오기
    $row = mysql_fetch_array($result); 
    
    $item_num = $row[num];
    $item_id = $row[id];
    $item_name = $row[name];
    $item_nick = $row[nick];
    $item_hit = $row[hit];
    $item_date = $row[regist_day];
    $item_subject = str_replace(" ", "&nbsp;", $row[subject]);
    $item_content = $row[content];
    $is_html = $row[is_html];
    
    if($is_html != "y")
    {
        $item_content = str_replace(" ", "&nbsp;", $item_content);
        $item_content = str_replace("\n", "<br>", $item_content);
    }
    
    // 글 조회수 증가
    $new_hit = $item_hit + 1; 
    $sql = "update greet set hit=$new_hit where num=$num"; 
    
    mysql_query($sql, $connect);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta charset="euc-kr">
        <link href="../css/common.css" rel="stylesheet" type="text/css" media="all">
        <link href="../css/greet.css" rel="stylesheet" type="text/css" media="all">
        <script>
            function del(href) 
            {
                if(confirm("한번 삭제한 자료는 복구할 방법이 없습니다.\n\n정말 삭제하시겠습니까?"))
                { 
                    document.location.href = href;
                }
            }
        </script>
    </head>
    <body>

        <!--생 략-->

                    <div id="view_title">
                        <div id="view_title1">
                            <?=$item_subject ?>
                        </div>
                        <div id="view_title2">
                            <?=$item_nick ?>|조회 : <?=$item_hit ?>|<?= $item_date ?>
                        </div>
                    </div> <!-- end of view_title -->
                    <div id="view_content">
                        <?= $item_content ?>
                    </div> <!-- end of view_content -->
                    <div id="view_button">
                        <a href="list.php?page=<?=$page?>">
                            <img src="../img/list.png">
                        </a>&nbsp;
                        
                        <? 
                            if($userid == $item_id or $userid == "admin")
                            {
                        ?>
                        
                        <a href="modify_form.php?num=<?=$num?>&page=<?=$page?>">
                            <img src="../img/modify.png">
                        </a>&nbsp;
                        <a href="javascript:del('delete.php?num=<?=$num?>')">
                            <img src="../img/delete.png"></a>&nbsp;
                            
                        <?
                            }
                        ?>
                        <? 
                            if($userid)
                            {
                        ?>
                        
                        <a href="write_form.php">
                            <img src="../img/write.png">
                        </a>
                        
                        <?
                            }
                        ?>

                    </div> <!-- end of view_button -->
                    <div class="clear"></div>
                </div> <!-- end of col2 -->
            </div> <!-- end of content -->
        </div> <!-- end of wrap -->
    </body>
</html>
