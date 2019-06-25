<?php
    if($_SERVER['REQUEST_METHOD'] === "POST")
    {
      include('database/config.php');
      if(empty($_POST['cr_uname']) or empty($_POST['cr_password']))
      {
        die("Something Went horribly Wrong!!");
      }
      $cr_username = mysqli_real_escape_string($conn, $_POST['cr_uname']);
      $cr_password = mysqli_real_escape_string($conn, $_POST['cr_password']);
      $qry = "SELECT * FROM cr WHERE username='$cr_username' AND password='$cr_password'";
      $exec = mysqli_query($conn, $qry);
      $count = mysqli_num_rows($exec);
      if($count==1)
      {
        $row = mysqli_fetch_array($exec);
        $_SESSION['cr'] = $row;
        header('Location: cr_dashboard.php?success');
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