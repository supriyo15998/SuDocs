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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/form_style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<h1>CR Dashboard</h1>
	<a href="logout_cr.php" class="btn btn-outline-warning" style="float: right">Logout</a>
	<h2>Welcome <?php echo $_SESSION['cr']['name']; ?></h2>
	<div class="container-fluid bg">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<form class="form-container">
                    <h2>Add New Document</h2>
					<div class="form-group">
						<label>Subject</label>
						<!-- Drop down list here -->
					</div>
					<div class="form-group">
						<label>Document Title</label>
						<input type="text" class="form-control" placeholder="Email">
					</div>
					<div class="form-group">
						<label>Upload Document</label>
                        <!-- File upload here -->
					</div>
					<button type="submit" class="btn btn-success btn-block">Submit</button>
				</form>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>