<?php
	include('database/config.php');
	$user = $_SESSION['user']['username'];
	if($user == true)
	{

	}
	else{
		?>
			<script type="text/javascript">
				alert('Login First!');
				window.location.href= "index.php?failure";
			</script>
		<?php
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>User Dashboard</h1>
	<h2>Welcome <?php echo $_SESSION['user']['username']; ?></h2>
	<a href="user_logout.php">Logout</a>
</body>
</html>