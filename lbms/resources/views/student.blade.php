<?php
$role=session()->get('role');
$usr=session()->get('info');

if(!$usr)
    die('You must log in !!');

if ($role == 5 || $role==2){
    die('not allowed');
}
?>
<html>
<head>
<title>student</title>
</head>
<body>
<h4>Hi Student</h4>
<form action='logout' method='POST'>
<input type=submit value=logout name=lg>@csrf
</form>
</body>
</html>