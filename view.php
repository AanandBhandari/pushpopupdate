<?php
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'brm');
if(!$db)
	die("cant selected");
$q="select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="view.css">
</head>
<body>
<h1>Book Record Management</h1>
	<form>
		<table class="table">
			<tr>
				<th>bookid</th>
				<th>title</th>
				<th>price</th>
				<th>author</th>
			</tr>
			<?php
			for ($i=1; $i<=$num ; $i++) 
			{
				$row=mysqli_fetch_array($result);
			?>
			<tr>
				<td><?php echo $row['bookid'];?></td>
				<td><?php echo $row['title'];?></td>
				<td><?php echo $row['price'];?></td>
				<td><?php echo $row['author'];?></td>
			</tr>
			<?php
			}
			?>
		</table>
	</form>
	to insert <a href="insertForm.php"> click here</a><br>
		to update <a href="updateform.php"> click here</a>
</body>
</html>