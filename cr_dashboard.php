<?php
	include('database/config.php');
	$user = $_SESSION['cr']['name'];
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
	<h1>CR Dashboard</h1>
	<h2>Welcome <?php echo $_SESSION['cr']['name']; ?></h2>
	<a href="logout_cr.php">Logout</a>
</body>
</html>