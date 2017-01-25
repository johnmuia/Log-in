<html>
<body>
<div id="container">
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
</style>

<meta charset="UTF-8">
<form method="POST" action="process.php"/>
<fieldset>
<legend>Registration details:</legend>

Firstname:<br>
<input type="text" name="Firstname"><br>
Lastname:<br>
<input type="text" name="Lastname"><br>
Username:<br>
<input type="text"required pattern="\w+" name="Username"><br>
Password:<br>
<input title="Password must contain at least 6 characters, including UPPER/lowercase,special characters and numbers" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="Password" onchange="form.Password.pattern = this.value;"><br>
Confirm Password:<br>
<input title="Please enter the same Password as above" type="password"required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="Confirm Password"><br>
<br><br>
<input type="submit" value="Create User">

</form>
</body>
</html>
