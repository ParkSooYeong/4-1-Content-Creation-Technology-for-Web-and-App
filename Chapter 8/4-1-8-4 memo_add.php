<!-- SKU CoE ITE - ParkSooYoung -->
<!-- Grade 4 , Semester 1 , Chapter 8 , Number 4 -->

<html>
    <head>
        <title>Memo add</title>
        <meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
    </head>
    <body>
        <form action=memo_insert2.php method=post>
            <input type=text name='name' value='이름' size=12 maxlength=12>,
            <input type=password name='pass' size=8 maxlength=20> :
            <input type=text name='memo' value='Memo' size=50 maxlength=50>
            <input type=hidden name='linkno' value='<?=$linkno?>'>
            <input type=submit value='o.k'>
        </form>
    </body>
</html>
