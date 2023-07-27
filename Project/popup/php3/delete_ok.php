<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
    $connect = mysql_connect("localhost","nzin","1234");
    mysql_select_db("nzin_db", $connect);

	
	$q = "select * from memoboard3 where num=$no";
	$r = mysql_fetch_array(mysql_query($q));
	
	if($r[pass] == $pass) {

	    $sql = "delete from memoboard3 where num=$no";
		$result = mysql_query($sql);
 
	    $sql2 = "delete from memoboard3 where linkno=$no";
		$result2 = mysql_query($sql2);

		if ($result) {
			echo "'memo' 삭제됨";

		   echo "<script> opener.parent.location='../popup3.php' </script>";

			mysql_close();

		   echo "<script> window.close() </script>";
		   //echo "<script>self.close()</script>";
		   //echo "<meta http-equiv='refresh' content='2; url=../popup1.php'>";
		}
		else
			 echo "'memo' 삭제 에러!!!";
	}
	else
		 echo "'memo' 삭제 에러!!! Password 다름.";
	mysql_close();
?>