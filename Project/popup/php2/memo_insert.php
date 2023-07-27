<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
    $connect = mysql_connect("localhost","nzin","1234");
    mysql_select_db("nzin_db", $connect);

	$date = mktime();

    $sql = "insert into memoboard2 (name, pass, memo, reg_date) ";
	$sql .= "values ('$name', '$pass', '$memo', $date)";

    $result = mysql_query($sql);
 
    mysql_close();

    if ($result) {
	   echo "<meta http-equiv='refresh' content='0; url=../popup2.php'>";
	}
    else
         echo "'memo' 작성 에러!!!";
?>
