<html>
<head>
<title>MyBooks
</title>
<link rel='stylesheet' type='text/css' href='1.css'>
</head>
<body >
<h1 align="center"><font face="Copperplate Gothic">
GoodReads - Your Personal Library</h1></font>
<hr>
<marquee>The Best App for Optimized Personal Storage of Your Favourites</marquee><font size="60">
<?php
$fcode=$_POST['fcode'];
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
$ins="select * from movies where MovieCode=$fcode";
$sql=mysqli_query($conn,$ins);
if($row=mysqli_fetch_array($sql))
{
	echo "Your Book details are below:";
	
echo "<br>";
echo $row['MovieCode'];
echo "<br>";
echo $row['MovieName'];
echo "<br>";
echo $row['Star'];
echo "<br>";
echo $row['Type'];
echo "<br>";


}
else{
	echo "problem";
}
?></font>
<hr>
Enjoy your Day!
<hr>
<a href="mymovies.html">Back To My Movies</a>
</body>
</html>