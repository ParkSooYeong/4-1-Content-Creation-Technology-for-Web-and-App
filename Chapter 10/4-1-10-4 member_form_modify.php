<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 10 , Number 4 -->

<!-- // -->

                <?
                    include "../lib/dbconn.php";
                    
                    $sql = "select * from member where id='$userid'";
                    $result = mysql_query($sql, $connect);
                    $row = mysql_fetch_array($result);

                    $hp = explode("-", $row[hp]);
                    $hp1 = $hp[0];
                    $hp2 = $hp[1];
                    $hp3 = $hp[2];

                    $email = explode("@", $row[email]);
                    $email1 = $email[0];
                    $email2 = $email[1];

                    mysql_close();
                ?>
    <body>

                <!-- // -->
                
                <div id="col2">
                    <form name="member_form" method="post" action="modify.php"> 
                        <div id="title">
                            <img src="../img/title_member_modify.gif">
                        </div> <!-- end of title -->
                        <div id="form_join">
                            <div id="join1">
                                <ul>
                                    <li>* 아이디</li>
                                    <li>* 패스워드</li>
                                    <li>* 패스워드 확인</li>
                                    <li>* 이름</li>
                                    <li>* 닉네임</li>
                                    <li>* 휴대폰</li>
                                    <li>&nbsp;&nbsp;&nbsp;이메일</li>
                                </ul>
                            </div> <!-- end of join -->
                            <div id="join2">
                                <ul>
                                    <li><?= $row[id] ?></li>
                                    <li><input type="password" name="pass" value="<?= $row[pass] ?>"></li>
                                    <li><input type="password" name="pass_confirm" value="<?= $row[pass] ?>"></li>
                                    <li><input type="text" name="name" value="<?= $row[name] ?>"></li>
                                    <li>
                                        <div id="nick1">
                                            <input type="text" name="nick" value="<?= $row[nick] ?>">
                                        </div>
                                        <div id="nick2">
                                            <a href="#">
                                                <img src="../img/check_id.gif" onclick="check_nick()">
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <input type="text" class="hp" name="hp1" value="<?= $hp1 ?>">
                                        - <input type="text" class="hp" name="hp2" value="<?= $hp2 ?>">
                                        - <input type="text" class="hp" name="hp3" value="<?= $hp3 ?>">
                                    </li>
                                    <li><input type="text" id="email1" name="email1" value="<?= $email1 ?>"> @ <input type="text" name="email2" value="<?= $email2 ?>"></li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                            <div id="must"> * 는 필수 입력항목입니다.</div>
                        </div> 
                        <div id="button">
                            <a href="#">
                                <img src="../img/button_save.gif" onclick="check_input()">
                            </a>&nbsp;&nbsp;
                            <a href="#">
                                <img src="../img/button_reset.gif" onclick="reset_form()">
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
