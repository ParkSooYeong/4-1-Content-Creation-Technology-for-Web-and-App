<HTML>
<HEAD>
<TITLE> Memo Add</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</HEAD>
<BODY>
<form action=memo_insert2.php method=post>
<input type=text name='name' placeholder='이름' size=10 maxlength=10>
<input type=password name='pass' placeholder='비밀번호' size=10 maxlength=10>
<input type=text name='memo' placeholder='한줄평' size=30 maxlength=50>
<input type=hidden name='linkno' value='<?=$linkno?>'>
<input type=submit value='o.k'>
</form>
</BODY>
</HTML>
