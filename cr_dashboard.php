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
	<title>Dashboard | SuDocs</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<h1>CR Dashboard</h1>
	<a href="logout_cr.php" class="btn btn-outline-warning" style="float: right">Logout</a>
	<h2>Welcome <?php echo $_SESSION['cr']['name']; ?></h2>
	<div class="container-fluid col-md-5">
		<div class="row">
			<div class="col">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addSubModal">Add New Subject</button>
			</div>
			<div class="col">
				<a href="add_doc.php" class="btn btn-primary">Add a Document</a>
			</div>
		</div>
	</div>
	<div class="modal fade" role="dialog" id="addSubModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" action="add_sub_process.php">
				<div class="modal-header">
					<h3 class="modal-title">Add New Subject</h3>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<?php
							$qry = "SELECT * FROM subjects";
							$exec = mysqli_query($conn,$qry);
						?>
						<h5>Available Subjects:
							<?php
								while($rows = mysqli_fetch_array($exec))
								{
										echo $rows['name'].", ";
								}
							?>
						</h5>
					</div>
					<div class="form-group">
						<input type="text" name="newSub" class="form-control" placeholder="Insert New Subject">
					</div>
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-success">
				</div>
				</form>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>