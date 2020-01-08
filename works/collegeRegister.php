<html>
<body bgcolor="pink">
<?php
$cname=$_POST['cname'];
$cpwd=$_POST['cpwd'];
$country=$_POST['country'];
$state=$_POST['state'];
$district=$_POST['district'];
$server='localhost';
$username='root';
$password='';
$db='alumni';
$conn=new mysqli( $server, $username,$password,$db);
if($conn->connect_error){
	die("Connection failed".$conn->connect_error);
}
else
{
	echo "Connected";
	echo "<br>";
}
$ins="insert into college values('$cname','$cpwd','$country','$state','$district','')";
if(mysqli_query($conn,$ins))
{
echo "Inserted";
header("refresh:1;url=addbooks.html");
}
else{
	echo "not";
}
?></font>
</body></html>