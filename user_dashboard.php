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
	<title>User Dashboad | SuDocs</title>
	<link rel="stylesheet" type="text/css" href="css/user_dashboard.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<h1>User Dashboard</h1>
	<h2>Welcome <?php echo $_SESSION['user']['username']; ?></h2>
	<a href="user_logout.php" class="btn btn-warning" style="float: right; margin-right: 40px;">Logout</a>
	<div class="container">
		<div class="row">
			<div class=col-md-5 style="margin-left: 10%">
				<form action="" method="GET">
					<select name="subject">
						<option autofocus value="">Choose Subject</option>
						<?php
							$qry = "SELECT * FROM subjects";
							$exec = mysqli_query($conn,$qry);
							while($row=mysqli_fetch_array($exec))
							{
								?>
								<option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
								<?php
							}
						?>
					</select>
					<input type="submit" name="submit" class="btn btn-primary">
				</form>
			</div>
		<div class="row">
			<div class="col">
			<?php
				if(isset($_GET['submit']))
				{
					
					$qry = "SELECT * FROM documents WHERE Subject_ID=''";
				}
			?>
			</div>				
		</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>