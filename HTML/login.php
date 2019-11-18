<html>
<body>
<?php
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];
$server='localhost';
$username='root';
$password='';
$db='login';
$conn=new mysqli( $server, $username,$password,$db);
if($conn->connect_error){
	die("Connection failed".$conn->connect_error);
}
else
{
	echo "Connected";
	echo "<br>";
}
$sql= "SELECT * FROM login WHERE uname = '$uname' AND pwd = '$pwd' ";
$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
echo 'success';
header("refresh:1;url=register.html");
}else{
echo 'failure';
}

?>
</body></html>