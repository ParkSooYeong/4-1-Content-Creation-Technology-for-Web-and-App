<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 10 , Number 1 -->

<?
    session_start();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
        <link rel="stylesheet" type="text/css" href="css/common.css">
    </head>
    <body>
        <div id="wrap">
            <div id="header">
                <? include "../lib/top_login2.php"; ?>
            </div> <!-- end of header -->
            <div id="menu">
                <? include "../lib/top_menu2.php"; ?>
            </div> <!-- end of menu -->
            <div id="content">
                <div id="col1">
                    <div id="left_menu">
                        <? include "../lib/left_menu.php"; ?>
                    </div> <!-- end of left_menu -->
                </div> <!-- end of col1 -->
                <div id="col2">
                    <form name="member_form" method="post" action="login.php">
                        <div id="title">
                            <img src="../img/title_login.gif">
                        </div> <!-- end of title -->
                        <div id="login_form">
                            <img id="login_msg" src="../img/login_msg.gif">
                            <div class="clear"></div>
                        </div> <!-- end of login_form -->
                        <div id="login1">
                            <img src="../img/login_key.gif">
                        </div> <!-- end of login1 -->
                        <div id="login2">
                            <div id="id_input_button">
                                <div id="id_pw_title">
                                    <ul>
                                        <li><img src="../img/id_title.gif"></li>
                                        <li><img src="../img/pw_title.gif"></li>
                                    </ul>
                                </div> <!-- end of id_pw_title -->
                                <div id="id_pw_input">
                                    <ul>
                                        <li><input type="text" name="id" class="login_input"></li>
                                        <li><input type="password" name="pass" class="login_input"></li>
                                    </ul>
                                </div> <!-- end of id_pw_input -->
                                <div id="login_button">
                                    <input type="image" src="../img/login_button.gif">
                                </div> <!-- end of login_button -->
                            </div> <!-- end of id_input_button -->
                            <div class="clear"></div>
                            <div id="login_line"></div>
                            <div id="join_button">
                                <img src="../img/no_join.gif">&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="../member/member_form.php">
                                    <img src="../img/join_button.gif">
                                </a>
                            </div>
                        </div> <!-- end of login2 -->
                    </form> <!-- end of member_form -->
                </div> <!-- end of col2 -->
            </div> <!-- end of content -->
        </div> <!-- end of wrap -->
    </body>
</html>
