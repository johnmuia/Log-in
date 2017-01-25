<!DOCTYPE HTML>
<html>
<body>
<meta charset="UTF-8">
<style>
#container {
position: fixed;
width: 340px;
height: 280px;
top: 30%;
left: 50%;
margin-top: -140px;
margin-left: -170px;
}
body {background-color:#f4f4f4;}
h2 {color: blue;}
form { color: #5a5656;}
<img align="left">
 </style>
<div id="container">
<fieldset>
<legend>Log In:</legend>
<img src="https://lh4.googleusercontent.com/-kLxukT5wJ9U/AAAAAAAAAAI/AAAAAAAAIG4/duReIRW5se8/s0-c-k-no-ns/photo.jpg" style="width:150px;height:150px;">
<h2><marquee>AWS ACADEMY USER PORTAL</marquee></h2>

<form method="POST" action="credentials.php">
Username:<br>
<input type="text" name="username"><br>
Password:<br>
<input type="Password" name="password"><br><br>
<input type="Submit" value="Submit">

</form>
<br>
<p><a href="#">Forgot Password?</a></p>
<br>
<p><a href="registration.php">New user? Register Here.</a></p>
<form action="registration.php">

<marquee>Welcome to AWS Academy</marquee>
</fieldset>
</form>

</body>
</html>

