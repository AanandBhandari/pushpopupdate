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
	<form action="deletion.php" method="post">
		<table class="table">
			<tr>
				<th>bookid</th>
				<th>title</th>
				<th>price</th>
				<th>aurthor</th>
				<th>check for delete</th>
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
				<td><input type="checkbox" value="<?php echo $row['bookid'];?>" name="b<?php echo $i;?>"></td>
			</tr>
			<?php
			}
			?>
			<tr>
				<td colspan="5"><input type="submit" value="delete">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>