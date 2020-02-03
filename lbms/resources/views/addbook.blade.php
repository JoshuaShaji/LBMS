<?php
$role=session()->get('role');
$usr=session()->get('info');

if(!$usr)
    die('You must log in !!');

if($role == 5 || $role==10)
    die('not allowed');

?>
<html>
<head>
<title>AddBook</title>
</head>
<body align="center">
<h1>ADD NEW BOOK</h1><br>
<form action="addbk" method="POST">
<table align ="center">
<tr><td>ISBN_No:</td><td><input type="text" name ="isbn" ></td></tr>@csrf
<tr><td>Book_code:</td><td><input type="text" name="bcd"></td></tr>
<tr><td><input type="submit" name="sub" value="Add"></td></tr>
</table>
</form>
</body>
</html>