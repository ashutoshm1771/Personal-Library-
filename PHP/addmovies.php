<html>
<head><title>AddedMovie</title></head>
<body bgcolor="pink">
<font size="100">
<?php
$movie=$_POST['fname'];
$code=$_POST['fcode'];
$star=$_POST['star'];
$type=$_POST['type'];
$server='localhost';
$username='root';
$password='';
$db='book';
$conn=new mysqli( $server, $username,$password,$db);
if($conn->connect_error){
	die("Connection failed".$conn->connect_error);
}
else
{
	echo "Connected";
	echo "<br>";
}
$ins="insert into movies values('$code','$movie','$star','$type')";
if(mysqli_query($conn,$ins))
{
echo "Inserted";
header("refresh:1;url=addmovies.html");
}
else{
	echo "not";
}
?></font>
</body></html>