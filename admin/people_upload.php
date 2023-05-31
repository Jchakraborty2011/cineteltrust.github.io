<?php
   include ("config.php");

if(isset($_POST['submit_property']))
{
	$image = $_POST['image'];
	$name = $_POST['name'];
	
	$description = $_POST['description'];
	$designation = $_POST['designation'];
	
	
	
	$image = $_FILES["image"]["name"];
	$v1=rand(1111,9999);
	$v2=rand(1111,9999);
	$v3=$v1.$v2;
	$v3=md5($v3);
	
	$uploads_dir = "uploads/".$v3.$image;
	$allowTypes = array('jpg','png','jpeg','gif');
	


	//Get the content of the image and then add slashes to it 
	$imagetmp=addslashes(file_get_contents($_FILES['image']['tmp_name']));
	if (file_exists($image)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

	//move_uploaded_file function will upload your image.  

	move_uploaded_file($_FILES["image"]["tmp_name"],$uploads_dir);


	$sql = "INSERT INTO people (image,name,description,designation) VALUES ('$image','$name','$description','$designation')";
				
			
		if ($mysqli->query($sql) === TRUE){
			echo "not uploaded";
			header("location: people_view.php");
		}
		else {
			echo "People added";
			header("location: people_upload.php");
		}
				
				
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
            <div class="page-content-wrapper" style="width:100%">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN PAGE BAR -->
                    
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title">Add Peoples
                        <small></small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN VALIDATION STATES-->
                            <div class="portlet light portlet-fit portlet-form bordered">
                                <!-- <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-home font-dark"></i>
                                        <span class="caption-subject font-dark sbold uppercase">Add Products </span>
                                    </div>
                                </div> -->
                                <div class="portlet-body">
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
													<label class="control-label col-md-3">Add Image:</label>
													<div class="col-md-9">
														<div class="fileinput fileinput-new" data-provides="fileinput">
															<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
																<img src="<?php echo $row['image']; ?>" alt="" /> </div>
															<div class="fileinput-preview fileinput-exists thumbnail" style="width: 335px; height: 255px;"> </div>
															<div>
																<span class="btn default btn-file">
																	<span class="fileinput-new"> Select image </span>
																	<span class="fileinput-exists"> Change </span>
																	<input type="file" name="image" id="image" style="width: 335px; height: 255px;"></span>
																<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
															</div>
														</div>
													</div>
												</div>
											<div class="form-group">
												<label class="control-label col-md-3">Add Name:
												</label>
												<div class="col-md-9">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-edit"></i>
														</span>
														<input type="text" name="name" data-required="1" placeholder="" class="form-control" value="" >
													</div>
												</div>
											</div>
											
											<div class="form-group">
												<label class="control-label col-md-3">Add Description:
												</label>
												<div class="col-md-9">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-edit"></i>
														</span>
														<textarea  name="description" class="form-control" placeholder="Description" style="height:150px;" ></textarea>
													</div>
												</div>
											</div>
											
											<div class="form-group">
												<label class="control-label col-md-3">Add Designation:
												</label>
												<div class="col-md-9">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-edit"></i>
														</span>
														<input type="text" name="designation" data-required="1" placeholder="" class="form-control" value="" >
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
