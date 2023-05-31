<?php
include ("config.php");
$id = $_GET['id'];

if(isset($_POST['submit_property']))
{
	
	
	$description = mysqli_real_escape_string($mysqli,$_POST['description']);
	


	$update_properties = "Update TABLE mission (description) VALUES ('$description')";
				
				if ($mysqli->query($update_properties) == true){
					$_SESSION['message'] = "Property added";
					header("location: mission_view.php");
				}
				else {
					$_SESSION['message'] = "Property could not be added";
				}
				
				
	$sql="SELECT * FROM mission ORDER BY id"; 
	$query=mysqli_query($mysqli, $sql); 
				
}

?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8" />
        <title>Admin</title>
        <?php include('metalinks.php'); ?>
		<style>
		  .hidden {
		   display:none;
		  }
		</style>
	</head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <?php include('header.php'); ?>
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <?php include('sidebar.php'); ?>
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="dashboard.php">Our Mission</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Edit Mission</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title">Edit Mission
                        <small></small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN VALIDATION STATES-->
                            <div class="portlet light portlet-fit portlet-form bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-home font-dark"></i>
                                        <span class="caption-subject font-dark sbold uppercase">Edit Products </span>
                                    </div>
                                </div>
                                <div class="portlet-body">
								<?php
								while ($row=mysqli_fetch_array($query)) { 
								?>
                                    <!-- BEGIN FORM-->
                                    <form  id="form_sample_3" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                        <div class="form-body">
                                            <div class="alert alert-danger display-hide">
                                                <button class="close" data-close="alert"></button> You have some form errors. Please check below.
											</div>
                                            <div class="alert alert-success display-hide">
                                                <button class="close" data-close="alert"></button> Your form validation is successful!
											</div>
											<div class="alert alert-success <?php if((isset($success)) && ($success == 1)) { } else { ?> display-hide <?php } ?>">
                                                <button class="close" data-close="alert"></button> You have successfully Updated.
											</div>
                                            <div class="alert alert-danger <?php if((isset($success)) && ($success == 0)) { } else { ?> display-hide <?php } ?>">
                                                <button class="close" data-close="alert"></button> Oops!! Something went wrong. Please try again.
											</div>
											 <div class="alert alert-danger <?php if((isset($success)) && ($success == 2)) { } else { ?> display-hide <?php } ?>">
                                                <button class="close" data-close="alert"></button> Oops!! Something went wrong. Please Check Again.
											</div>
										</div>
										
												
											<div class="form-group">
												<label class="control-label col-md-3">Add Property Description:
												</label>
												<div class="col-md-9">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-edit"></i>
														</span>
														<input type="text" name="description" data-required="1" placeholder="" class="form-control" value="<?php echo $row['description'];?>" >
													</div>
												</div>
											</div>
											
											<?php
											
											}
											?>
								</div>                                  
										
                            </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <input type="submit" class="btn green" name="submit_property" value="Submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END FORM-->
                                </div>
                                <!-- END VALIDATION STATES-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <?php include('footer.php'); ?>
    </body>
	<!-- jQuery Form Validation code -->
	  
		
</html>
