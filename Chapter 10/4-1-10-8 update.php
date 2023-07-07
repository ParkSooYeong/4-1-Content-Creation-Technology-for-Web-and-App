<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 10 , Number 8 -->

<?
    include "../lib/dbconn.php";

    $sql = "update survey set $composer = $composer + 1";
    mysql_query($sql, $connect);

    mysql_close();

    Header("location:result.php");
?>
