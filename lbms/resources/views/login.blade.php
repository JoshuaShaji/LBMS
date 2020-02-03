<?php
$usr=session()->get('info');

if($usr)
    die('already logged in');
?>
<html>
<head>
<title>login</title>
</head>
<body align="center">
<h1>LOGIN</h1><br>
<form action="login" method="POST">
<table align ="center">
<tr><td>UserID:</td><td><input type="text" name ="uid" ></td></tr>@csrf
<tr><td>password:</td><td><input type="password" name="pwd"></td></tr>
<tr><td><input type="submit" name="sub" value="login"></td></tr>
</table>
</form>
</body>
</html>