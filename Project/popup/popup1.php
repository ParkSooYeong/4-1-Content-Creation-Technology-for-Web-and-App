<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>원신</title>
    <style>
      body {
        background-color: black;
      }
      img.absolute { 
        position: absolute;
      }
      a {
        text-decoration: none;
        color: blue;
      }
      .delete {
        color: indianred;
      }
      hr {
        height : 1px;
        background : black;
      }
    </style>
  </head>

  <body> <!--순서대로 포스터,예고편,영화사,평점사,실시간 채팅,정보-->
    <div class="absolute" style="float: left">
      <img src = "../img/poster/1_genshin.jpg" style="float: left; margin-left: 50px; margin-top: 50px; width:382px; height:566px;">
      <h1 style="color:white; margin-left:205px;">원신</h1> <!-- 구분위한 아이디값 -->
      <hr style="color:white; width:382px; margin-left:50px;"/>
      <p style="color:white; margin-left:50px;">장르 : 3인칭 오픈 월드 액션 어드벤처</p>
      <p style="color:white; margin-left:50px;">제작 : HoYoverse</p>
      <p style="color:white; margin-left:50px;">플랫폼 : PS, iOS, Android, Windows</p>
      <p style="color:white; margin-left:50px;">심의 등급 : 12세 ~ 15세 이용가</p>
    </div>
    
    <div class="absolute" style="float: left;">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/C2ldwGojnjE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" style="margin-left:25px; margin-top:50px;" allowfullscreen></iframe>
      <hr style="width:559px; margin-left:25px;"/>
      <h3 style="color:white; margin-left:25px;">"We had no time to say goodby, so let's not call it that."</h3>
      <hr style="width:559px; margin-left:25px;"/>
      <img src="../img/icon/lotte.png" style="margin-left:45px; margin-top:5px;" width="150" height="150" onclick="window.open('https://www.lottecinema.co.kr/NLCHS')"target="_blank">
      <img src="../img/icon/cgv.png" style="margin-left:45px; margin-top:5px;" width="150" height="150" onclick="window.open('https://www.cgv.co.kr/')"target="_blank">
      <img src="../img/icon/mega.png" style="margin-left:25px; margin-top:10px;" width="150" height="150" onclick="window.open('https://www.megabox.co.kr/')"target="_blank">
      <hr style="width:559px; margin-left:25px;"/>
      <img src="../img/icon/IMDB.png" style="margin-left:45px; margin-top:15px;" width="150" height="150" onclick="window.open('https://www.imdb.com/title/tt11585486/?ref_=ext_shr_lnk')"target="_blank">
      <img src="../img/icon/meta.png" style="margin-left:45px; margin-top:15px;" width="150" height="150" onclick="window.open('https://www.metacritic.com/game/pc/genshin-impact')"target="_blank">
      <img src="../img/icon/tomato.png" style="margin-left:25px; margin-top:15px;" width="150" height="150" onclick="window.open('https://opencritic.com/game/10217/genshin-impact')"target="_blank">
    </div>

    <div class="absolute" style="float: left; margin-top:15px; margin-left:25px;">
      <div style="background-color:lightblue; padding:8px; width:500px; height:800px; float: left; overflow:scroll; overflow-x:hidden;">

        <?
        $connect = mysql_connect("localhost","nzin","1234");
        mysql_select_db("nzin_db", $connect);

        $sql = "select * from memoboard where linkno = 0 order by reg_date desc";
        $result = mysql_query($sql);
        while ($row = mysql_fetch_array($result)) {
          $date = date("m-d h:i:s", $row[reg_date]);
          echo "<font size=5 color=000000> ".$row[name]." : ".$row[memo]." </font>";
          echo "<br>";
          echo "<font size=2 color=000000>[".$date."]</font>";
          //echo "<a href='php/memo_add.php?linkno=$row[num]'>+</a>";
          echo "<a href='popup1.php' onclick=\"window.open('php1/memo_add.php?linkno=".$row[num]."', 'newwindow', 'width=500,height=250')\"> 덧글달기 </a>";
          //echo " <a href=php/delete.php?no=".$row[num].">-</a>";
          echo "<a class='delete' href='popup1.php' onclick=\"window.open('php1/delete.php?no=".$row[num]."', 'newwindow', 'width=300,height=250')\"> 삭제하기</a>";
          echo "<hr >";
          
          // 댓글 작성에 대한 목록
          $sql2 = "select * from memoboard where linkno = $row[num] order by reg_date";

          $result2 = mysql_query($sql2);
          while($row2 = mysql_fetch_array($result2)) {
          $date2 = date("m-d h:i:s", $row2[reg_date]);
          echo "&nbsp; →".$row2[name]." : ".$row2[memo];
          echo "<br>";
          echo "<font size=2 color=000000>[".$date2."]</font>";
          //echo " <a href=php/delete.php?no=".$row2[num].">-</a>";
          echo "<a href='popup1.php' onclick=\"window.open('php1/delete.php?no=".$row2[num]."', 'newwindow', 'width=300,height=250')\"> 삭제하기</a>";
          echo "<hr >";
          }
        }
        mysql_close($connect);
        ?>

      </div>

      <form action=php1/memo_insert.php method=post>
      <input type=text name='name' placeholder='이름' size=10 maxlength=10>
      <input type=password name='pass' placeholder='비밀번호' size=10 maxlength=10>
      <input type=text name='memo' placeholder='한줄평' size=30 maxlength=50>
      <input type=submit value='등록' style='margin-top:2px;'>
      </form>

    </div>

  </body>
</html>
