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
<?php
    if(isset($_POST['upload']))
    {
        $subject = $_POST['subject'];
        $qry_n = "SELECT id FROM subjects WHERE name='$subject'";
        $exec_n = mysqli_query($conn,$qry_n);
        $row_n = mysqli_fetch_array($exec_n);
        $id = $row_n['id'];
        $file_name = $_POST['title'];
        //$file_name = $_FILES['path']['name'];
        $file_type = $_FILES['path']['type'];
        $file_size = $_FILES['path']['size'];
        $file_temp_loc = $_FILES['path']['tmp_name'];
        $file_store = "docs/".$file_name;
        move_uploaded_file($file_temp_loc,$file_store);
        $new_path = $file_store;
        $qry = "INSERT INTO documents(Subject_ID,document_name,document_path) VALUES('$id','$file_name','$new_path')";
        $exec = mysqli_query($conn,$qry);
        ?>
            <script type="text/javascript">
                alert('Document Uploaded Successfully!');
                window.location.href = 'add_doc.php?success';
            </script>
        <?php
    }
?>