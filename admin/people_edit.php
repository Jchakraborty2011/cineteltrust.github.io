<?php
include ("config.php");
$id = $_GET['id'];

if(isset($_POST['submit_property']))
{
	
	$name = mysqli_real_escape_string($mysqli,$_POST['name']);
	
	$description = mysqli_real_escape_string($mysqli,$_POST['description']);
	$designation = mysqli_real_escape_string($mysqli,$_POST['designation']);

	$uploads_dir = 'uploads/';
	$image = $_FILES["image"]["name"];


//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['image']['tmp_name']));


//move_uploaded_file function will upload your image.  

move_uploaded_file($_FILES["image"]["tmp_name"], "$uploads_dir".$_FILES["image"]["name"]);


	$update_people = "Update TABLE people (image,name,description,designation) VALUES ('$image','$name','$description','$designation')";
				
				if ($mysqli->query($update_people) == true){
					$_SESSION['message'] = "People added";
					header("location: people_view.php");
				}
				else {
					$_SESSION['message'] = "People could not be added";
				}
				
				
	$sql="SELECT * FROM people ORDER BY id"; 
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
                                <a href="dashboard.php">People</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Edit People</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title">Edit People
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
                                        <span class="caption-subject font-dark sbold uppercase">Edit People </span>
                                    </div>
                                </div>
                                <div class="portlet-body">
								<?php
								while ($row=mysqli_fetch_array($id)) { 
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
										
												<div class="form-group last">
													<label class="control-label col-md-3">Add People Image:</label>
													<div class="col-md-9">
														<div class="fileinput fileinput-new" data-provides="fileinput">
															<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
																<img src="uploads/<?php echo $row['image'];?>" alt="" /> </div>
															<div class="fileinput-preview fileinput-exists thumbnail" style="width: 335px; height: 255px;"> </div>
															<div>
																<span class="btn default btn-file">
																	<span class="fileinput-new"> Select image </span>
																	<span class="fileinput-exists"> Change </span>
																	<input type="file" name="image" style="width: 335px; height: 255px;"> </span>
																<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
															</div>
														</div>
													</div>
												</div>
											<div class="form-group">
												<label class="control-label col-md-3">Add People Name:
												</label>
												<div class="col-md-9">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-edit"></i>
														</span>
														<input type="text" name="name" data-required="1" placeholder="" class="form-control" value="<?php echo $row['name'];?>" >
													</div>
												</div>
											</div>
											
											<div class="form-group">
												<label class="control-label col-md-3">Add People Description:
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
											<div class="form-group">
												<label class="control-label col-md-3">Add People Designation:
												</label>
												<div class="col-md-9">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-edit"></i>
														</span>
														<input type="text" name="designation" data-required="1" placeholder="" class="form-control" value="<?php echo $row['designation'];?>" >
													</div>
												</div>
											</div>
											
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
                                    <?php
											
											}
											?>
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
