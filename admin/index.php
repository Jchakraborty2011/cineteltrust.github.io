<?php
	include ("config.php");
	// if(isset($_POST['submit']))
	// {
	// 	$email = $_POST['email'];
	// 	$password = $_POST['password'];

	// 	$get_admin = mysqli_query($mysqli,"select * from admin where email='".$email."' and password ='".$password."'");
	// 	$get_fetch_admin = mysqli_fetch_array($get_admin);
	// 	$get_rows = mysqli_num_rows($get_admin);

	// 	if($get_rows > 0)
	// 	{
	// 		$_SESSION['id'] = $get_fetch_admin['id'];
	// 		echo "<script>window.location.href='dashboard.php'</script>";
	// 	}
	// 	else
	// 	{
	// 		echo "<script>alert('Please Check The Error')</script>";

	// 	}
	// }
?>

<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Admin Login</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
		<?php
			include ("metalinks.php");
		?>
        </head>
    <!-- END HEAD -->

    <body class=" login page-footer-fixed"  >
        <!-- BEGIN LOGO -->
		
        <div class="logo">
            <a href="index.php">
               <img src="images/logo.png" alt="ABRI Services">
			</a>
        </div>
        <!-- END LOGO -->
        <button  class="btn btn-success uppercase pull-right"><a href="dashboard.php">Submit</a></button>
      
    

        <?php
			include ('footer.php');
		?>
    </body>

</html>