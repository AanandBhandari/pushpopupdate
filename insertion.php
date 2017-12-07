<?php
$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'brm');
if(!$db)
	die("cant selected");
$q="insert into book (title,price,author) values('$title',$price,'$author')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<html>
<head>
</head>
<body>
<h1>Book Record Management</h1>
<p><?php if($status==1) 
			echo "your data is sucessfully inserted";
		else
			echo"try again";
	?>	
	</p>
<a href="insertForm.php">insert again</a>
</body>
</html>