<?php 
include 'db.php';
$Firstname = $Lastname = $Username = $Password = "";
//create a variable
$Firstname=$_POST["Firstname"];
$Lastname=$_POST["Lastname"];
$Username=$_POST["Username"];
$Password=$_POST["Password"];

//Execute the query

echo $Firstname;
echo "<br>";
echo $Lastname;
echo "<br>";
echo $Username;
echo "<br>";
echo $Password;

mysqli_query($conn,"INSERT INTO login_details(Firstname, Lastname, Username, Password) VALUES('$Firstname', '$Lastname', '$Username', '$Password')");
if (mysqli_affected_rows($conn) > 0) {
echo "<p>user Added</p>";
echo "<a href='login.php'>Go Back</a>";
} else {
echo "Employee not Added<br>";
echo mysqli_error ($conn);
}

?>
