<?php
$role=session()->get('role');
$usr=session()->get('info');

if(!$usr)
    die('You must log in !!');

if ($role == 5 || $role==10){
    die('not allowed');
}
?>
<html>
<head>
<title>librarian</title>
</head>
<body>
<h4>Hi Librarian</h4>
<form action='logout' method='POST'>
<input type=submit value=logout name=lg>@csrf
<button type='button' name='addb' onclick="location.href = 'addb';">Add Book</button>
</form>
</body>
</html>