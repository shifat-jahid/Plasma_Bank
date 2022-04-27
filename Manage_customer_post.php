<?php

	
	$title = "List Posta";
	require_once "./includes/header.php"; 
	require "includes/home_menu.php" ;
    require_once "Admin_connect.php";
	$conn = db_connect();
	
    function getAll($conn){
		$query = "SELECT * from post";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Can't retrieve data " . mysqli_error($conn);
			exit;
		}
		return $result;
    }

    $result = getAll($conn);
?>
	<a href="Admin_signout.php" class="btn btn-primary">Sign out!</a>
	<table class="table" style="margin-top: 20px">
		<tr>
			<th>Hospital Name</th>
			<th>post</th>
			<th>Blood Group</th>
			<th>Contact</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
		<?php while($row = mysqli_fetch_assoc($result)){ ?>
		<tr>
			<td><?php echo $row['hospital_name']; ?></td>
			<td><p><?php echo $row['post']; ?></p></td>
			<td><?php echo $row['blood_group']; ?></td>
			<td><?php echo $row['phone']; ?></td>
		
			<td><a href="Delete_customer_post.php?postid=<?php echo $row['post_id']; ?>">Delete</a></td>
		</tr>
		<?php } ?>
	</table>

<?php

	if(isset($conn)) {mysqli_close($conn);}
	require_once "./includes/footer.php";
?>