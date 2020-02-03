<html>
<head><title>Registration</title></head>
<body>
<div>
<ul>
@foreach($errors->all()  as $e)
<li>{{$e}}</li>
@endforeach
</ul>
</div>
<form action="submit" method="POST">
<h1 align="center">STUDENT REGISTRATION</h1><br>

<table align ="center">
<tr><td>User ID:</td><td><input type="text" name="uid"></td></tr>@csrf
<tr><td>Username:</td><td><input type="text" name ="uname" ></td></tr>
<tr><td>Password:</td><td><input type="password" name="pwd"></td></tr>
<tr><td>Department:</td><td><input type="text" name="dpt"></td></tr>
<tr><td>PhoneNo.:</td><td><input type="number" name="no"></td></tr>
<tr><td>Email:</td><td><input type="mail" name="mail"></td></tr>

<tr><td><input type ="submit" name="sub" value= "Register"></td></tr>
</table>
</form>
</body>
</html>