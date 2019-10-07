<html>
<head><title>AddedMusic</title></head>
<body bgcolor="pink">
<h1 align="center">
GoodReads - Your Personal Library</h1>
<hr>
<font size="7" color="white"><marquee>The Best App for Optimized Personal Storage of Your Favourites</marquee></font>
<hr><div><table><tr><td><img src="song1.jpg"></td>
<td><font size="60">
<?php
$mnum=$_POST['mnumber'];
$mname=$_POST['mname'];
$genre=$_POST['genre'];
$lang=$_POST['lang'];
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
$ins="insert into music values('$mnum','$mname','$genre','$lang')";
if(mysqli_query($conn,$ins))
{
echo "Inserted";
header("refresh:1;url=addmusic.html");
}
else{
	echo "not";
}
?></font></td></tr></table>
</body></html>