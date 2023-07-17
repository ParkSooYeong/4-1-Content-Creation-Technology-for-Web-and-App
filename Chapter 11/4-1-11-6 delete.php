<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 11 , Number 6 -->

<?
    include "../lib/dbconn.php";

    $sql = "delete from memo where num = $num";
    mysql_query($sql, $connect);

    mysql_close();

    echo ("
        <script>
            location.href = 'memo.php';
        </script>
    ");
?>
