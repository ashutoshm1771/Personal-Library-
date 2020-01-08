<html>
<head>
<title>My Music</title>
<link rel='stylesheet' type='text/css' href='1.css'>
</head>
<body>
<h1 align="center">
GoodReads - Your Personal Library</h1>
<hr>
<font size="7" color="white"><marquee>The Best App for Optimized Personal Storage of Your Favourites</marquee></font>
<hr>
<?php
$mnum=$_POST['mnum'];
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
	echo "<hr>";
}
$ins="select * from music where MusicCode=$mnum";
$sql=mysqli_query($conn,$ins);
if($row=mysqli_fetch_array($sql))
{
	echo "Your Music details are below";
	echo "<br>";
	echo "<ul type='circle'>";
	echo "<li>";
echo $row['MusicCode'];
echo "</li>";
echo "<br>";
echo "<li>";
echo $row['MusicName'];
echo "</li>";
echo "<br>";
echo "<li>";
echo $row['Genre'];
echo "</li>";
echo "<br>";
echo "<li>";
echo $row['Language'];
echo "</li></ul>";
echo "<br>";

}
else{
	echo "problem";
}
?>
<hr>
Enjoy your Day!
<hr>
<a href="mymusic.html">Back To My Music</a>
</body>
</html>