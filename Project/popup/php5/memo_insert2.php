<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
    $connect = mysql_connect("localhost","nzin","1234");
    mysql_select_db("nzin_db", $connect);

	$date = mktime();

    $sql = "insert into memoboard5 (name, pass, memo, linkno, reg_date) ";
	$sql .= "values ('$name', '$pass', '$memo', $linkno, $date)";

    $result = mysql_query($sql);
 
    mysql_close();

    if ($result) {
         echo "'memo' 작성되었음!";

         echo "<script> opener.parent.location='../popup5.php' </script>";

         echo "<script> window.close() </script>";
	}
    else
         echo "'memo' 대댓글 작성 에러!!!";
?>