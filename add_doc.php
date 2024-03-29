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
	<h2>Welcome <?php echo $_SESSION['cr']['name']; ?></h2>
	<a href="logout_cr.php" class="btn btn-warning" style="float: right">Logout</a>
	<div class="container-fluid bg">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<form class="form-container" action="submit_doc.php" method="POST" enctype="multipart/form-data">
                    <h2>Add New Document</h2>
					<div class="form-group">
						<label>Subject</label>
						<select name="subject" required>
							<option autofocus value="">Select Subject</option>
							<?php
								include('database/config.php');
								$qry = "SELECT name FROM subjects";
								$exec = mysqli_query($conn,$qry);
								while($row=mysqli_fetch_array($exec))
								{
									?>
									<option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
									<?php
								}
							?>
						</select>
					</div>
					<div class="form-group">
						<label style="color: #000;"><b>Document Title</b></label>
						<input type="text" class="form-control" name="title" placeholder="Document Title" required>
					</div>
					<div class="form-group">
						<label style="color:white">Upload Document</label>
                        <input type="file" name="path" required>
					</div>
					<input type="submit" class="btn btn-success btn-block" name="upload" value="Submit">
					<a href="#" class="btn btn-success btn-block">Back</a>
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