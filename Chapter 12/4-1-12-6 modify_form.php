<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 12 , Number 6 -->

<? 
    session_start();
    
    include "../lib/dbconn.php";
    
    $sql = "select * from greet where num=$num";
    $result = mysql_query($sql, $connect);
    $row = mysql_fetch_array($result);

    $item_subject = $row[subject];
    $item_content = $row[content];
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

    <!--생 략-->

    <body>

        <!--생 략-->

                    <div class="clera"></div>
                    <form name="board_form" method="post" action="insert.php?mode=modify&num=<?=$num?>&page=<?=$page?>"> 
                        <div id="write_form">
                            <div class="write_line"></div>
                            <div id="write_row1">
                                <div class="col1">닉네임</div>
                                <div class="col2"><?=$usernick?></div>
                            </div> <!-- end of write_row1 -->???
                            <div class="write_line"></div>
                            <div id="write_row2">
                                <div class="col1">제목</div>
                                <div class="col2">
                                    <input type="text" name="subject" value="<?=$item_subject?>">
                                </div>
                            </div>
                            <div class="write_line"></div>
                            <div id="write_row3">
                                <div class="col1">내용</div>
                                <div class="col2">
                                    <textarea rows="15" cols="79" name="content"><?=$item_content?></textarea>
                                </div>
                            </div> 
                            <div class="write_line"></div>
                        </div>
                        <div id="write_button">
                            <input type="image" src="../img/ok.png">&nbsp;
                            <a href="list.php?page=<?=$page?>">
                                <img src="../img/list.png">
                            </a>
                        </div> <!-- end of write_button -->
                    </form>
                </div> <!-- end of col2 -->
            </div> <!-- end of content -->
        </div> <!-- end of wrap -->
    </body>
</html>
