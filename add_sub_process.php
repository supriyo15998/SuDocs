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
    $subject = mysqli_real_escape_string($conn,trim($_POST['newSub']));
    //var_dump($subject);
	$qry = "INSERT INTO subjects(name) VALUES('$subject')";
	$exec = mysqli_query($conn,$qry);
	?>
		<script type="text/javascript">
			alert('Subject Added Successfully!');
            window.location.href="cr_dashboard.php";
		</script>
	<?php
?>