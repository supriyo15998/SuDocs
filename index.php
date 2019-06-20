<!DOCTYPE html>
<html>
<head>
	<title>Home | SuDocs</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<h1>SuDocs</h1>
	<h2>Lifetime of your document depends upon the date of your exam</h2>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 40%; margin-left: 28%">
  		<ol class="carousel-indicators">
    		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
   	 		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  		</ol>
  		<div class="carousel-inner">
    		<div class="carousel-item active">
      			<img src="img/carousel/caro1.jpg" class="d-block w-100" height="270" alt="photo1">
    		</div>
    		<div class="carousel-item">
      			<img src="img/carousel/caro2.jpg" class="d-block w-100" height="270" alt="photo2">
    		</div>
    		<div class="carousel-item">
      			<img src="img/carousel/adult-blur-depth-of-field-1739840.jpg" class="d-block w-100" height="270" alt="photo3">
    		</div>
  		</div>
  		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		<span class="sr-only">Previous</span>
  		</a>
  		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
    		<span class="sr-only">Next</span>
  		</a>
	</div>
	<br><br>
	<div class="container" style="width: 70%">
		<center>
  			<form action="index.php" method="POST">
    			<div class="row">
      				<div class="col-25">
        				<label style="margin-left: 50px;">Username</label>
      				</div>
      				<div class="col-75">
        				<input type="text" name="uname" placeholder="Enter username" required="required">
      				</div>
    			</div>
    			<div class="row">
      				<div class="col-25">
        				<label style="margin-left: 50px;">Password</label>
      				</div>
      				<div class="col-75">
        				<input type="password" name="password" placeholder="Enter password" required="required">
      				</div>
    			</div>
    			<div class="row">
    				<div class="col-75">
      					<input type="submit" value="Submit">
    				</div>
    			</div>
  			</form>
		</center>
	</div>
	<br>
	<footer>
  		<div class="footer-copyright text-center py-3" style="font-size: 18px">Designed and Developed By ©
    		<a href="https://www.linkedin.com/in/supriyo-das-0176a116a/" target="_blank">Supriyo Das</a>
  		</div>
	</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<?php
  if($_SERVER['REQUEST_METHOD'] === "POST")
  {
    include('config.php');
    if(empty($_POST['uname']) or empty($_POST['password']))
    {
      die("Something Went Wrong!!");
    }
    $username = mysqli_real_escape_string($conn, $_POST['uname']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $qry = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $exec = mysqli_query($conn, $qry);
    $count = mysqli_num_rows($exec);
    if($count >= 1)
    {
      $row = mysqli_fetch_array($exec);
      $_SESSION['user'] = $row;
      header('Location: user_dashboard.php?success');
      exit;
    }
    else {
      ?>
        <script type="text/javascript">
          alert('Invalid User!');
          window.location.href = "index.php?failure";
        </script>
      <?php
    }
  }  
?>