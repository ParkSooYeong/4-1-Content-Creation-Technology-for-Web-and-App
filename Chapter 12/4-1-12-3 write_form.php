<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 12 , Number 3 -->

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
    <body>

        <!--생 략-->

                    <form name="board_form" method="post" action="insert.php"> 
                        <div id="write_form">
                            <div class="write_line"></div>
                            <div id="write_row1">
                                <div class="col1">닉네임</div>
                                <div class="col2"><?=$usernick?></div>
                                <div class="col3"><input type="checkbox" name="html_ok" value="y">HTML 쓰기</div>
                            </div> <!-- end of write_row1 -->
                            <div class="write_line"></div>
                            <div id="write_row2">
                                <div class="col1">제목</div>
                                <div class="col2"><input type="text" name="subject"></div>
                            </div>
                            <div class="write_line"></div>
                            <div id="write_row3">
                                <div class="col1">내용</div>
                                <div class="col2">
                                    <textarea rows="15" cols="79" name="content"></textarea>
                                </div>
                            </div>
                            <div class="write_line"></div>
                        </div> <!-- end of write_form -->
                        <div id="write_button">
                            <input type="image" src="../img/ok.png">&nbsp;
                            <a href="list.php?page=<?=$page?>"><img src="../img/list.png"></a>
                        </div> <!-- end of write_button -->
                    </form>
                </div> <!-- end of col2 -->
            </div> <!-- end of content -->
        </div> <!-- end of wrap -->
    </body>
</html>
