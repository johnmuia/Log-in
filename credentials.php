<?php
include 'db.php';
$Username=$_POST["username"];
$Password=$_POST["password"];
$sql="SELECT Username, Password FROM login_details WHERE Username='$Username' and Password='$Password'";


$result=mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0)
{
header("location:mutunga.html");
// output data of each row
 
}
else{
echo "Invalid user";
}
?>
