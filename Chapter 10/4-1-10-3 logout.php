<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 10 , Number 3 -->

<?
    session_start();

    unset($_SESSION['userid']);
    unset($_SESSION['username']);
    unset($_SESSION['usernick']);
    unset($_SESSION['userlevel']);

    echo("
        <script>
            location.href='../index.php';
        </script>
    ");
?>
