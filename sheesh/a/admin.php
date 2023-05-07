<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "user_info";

$conn = mysqli_connect($host, $user, $password, $database);

// Read operation
$sql = "SELECT * FROM user_info";
$result = mysqli_query($conn, $sql);

// Update operation
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $plan = $_POST['plan'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $sql = "UPDATE user_info SET plan='$plan', start_date='$start_date', end_date='$end_date' WHERE username='$id'";
    mysqli_query($conn, $sql);
}

// Delete operation
if(isset($_POST['delete'])){
    $id = $_POST['id'];

    $sql = "DELETE FROM user_info WHERE username='$id'";
    mysqli_query($conn, $sql);
}

// Search operation
if(isset($_POST['search'])){
    $search = $_POST['search'];

    $sql = "SELECT * FROM user_info WHERE username LIKE '%$search%' OR plan LIKE '%$search%' OR start_date LIKE '%$search%' OR end_date LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <script src="admin.js"></script>
	<title>User Info</title>
</head>
<body>
	<h1>User Information</h1>
    <!-- Search operation form -->
	<form method="POST" action="">
		<label for="search">Search:</label>
		<input type="text" id="search" name="search" required>
		<input type="submit" name="submit" value="Search">
	</form> <br>
	
	<!-- Read operation table -->

    <div class="btn">
		<button onclick="redirectToAdmin()">↻</button>
        <button onclick="showAccounts()">Show Accounts to Confirm</button>
    </div>
    
	<table>
		<tr>
			<th>Username</th>
			<th>Plan</th>
			<th>Payment</th>
            <th>Transaction Code</th>
			<th>Start date</th>
			<th>End date</th>
			<th>Creation date</th>
			<th>Action</th>
		</tr>
		<?php while($row = mysqli_fetch_array($result)) { ?>
		<tr>
			<td><?php echo $row['username']; ?></td>
			<td><?php echo $row['plan']; ?></td>
			<td><?php echo $row['payment']; ?></td>
            <td><?php echo $row['code']; ?></td>
			<td><?php echo $row['start_date']; ?></td>
			<td><?php echo $row['end_date']; ?></td>
			<td><?php echo $row['creation_date']; ?></td>
			<td>
				<!-- Update operation form -->
				<form method="POST" action="">
					<input type="hidden" name="id" value="<?php echo $row['username']; ?>">
					<input type="text" name="plan" value="<?php echo $row['plan']; ?>" required>
					<input type="date" name="start_date" value="<?php echo $row['start_date']; ?>" required>
					<input type="date" name="end_date" value="<?php echo $row['end_date']; ?>" required>
					<input type="submit" name="update" value="Update">
				</form>
				<!-- Delete operation form -->
				<form method="POST" action="">
					<input type="hidden" name="id" value="<?php echo $row['username']; ?>">
					<input type="submit" name="delete" value="Delete">
				</form>
			</td>
		</tr>
		<?php } ?>
	</table>
	<hr>

</body>
</html>