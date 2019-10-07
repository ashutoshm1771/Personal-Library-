<html>
<head><title>AddedBook</title></head>
<body bgcolor="pink">
<font size="100">
<?php
$book=$_POST['bname'];
$isbn=$_POST['iname'];
$author=$_POST['author'];
$color=$_POST['color'];
$cat=$_POST['cate'];
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
$ins="insert into books values('','$book','$isbn','$author','$color','$cat','')";
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