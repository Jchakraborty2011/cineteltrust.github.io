
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title> Admin | Dashboard</title>
        <?php include('metalinks.php'); ?>
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
                                <a href="dashboard.php">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Dashboard</span>
                            </li>
                        </ul>
                    </div>

					<!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title" style="background:#efefef;padding:7px;font-size:17px;">Category
                        <!--<small>Statistics</small>-->
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="add_category.php" ><img src="images/1467998119_categories.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="add_category.php" style="color:#000;">Add Category</a>
							</div>
                        </div>

						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="view_category.php" ><img src="images/1467998119_categories.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="view_category.php" style="color:#000;">View Category</a>
							</div>
                        </div>
						
					
						
                    </div>
					                    
                    <div class="clearfix"></div>

                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title" style="background:#efefef;padding:7px;font-size:17px;"> SubCategory
                        <!--<small>Statistics</small>-->
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="add_sub_category.php" ><img src="images/1467998119_categories.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="add_sub_category.php" style="color:#000;">Add SubCategory</a>
							</div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="view_sub_category.php" ><img src="images/1467998119_categories.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:12px;padding-top:17px;">
								<a href="view_sub_category.php" style="color:#000;">View SubCategory</a>
							</div>
                        </div>
					</div>
						
					
					
                    <div class="clearfix"></div>


					<!-- END PAGE BAR -->

                    <!-- END DASHBOARD STATS 1-->

					<!-- END PAGE BAR -->
					
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title" style="background:#efefef;padding:7px;font-size:17px;">Groups
                        <!--<small>Statistics</small>-->
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
					
					 <div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="add_groups.php" ><img src="images/1467999267_cloud-users.png" style="height:50px;width:60px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="add_groups.php" style="color:#000;">Add Groups</a>
							</div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="view_groups.php" ><img src="images/1467999267_cloud-users.png" style="height:50px;width:60px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:12px;padding-top:17px;">
								<a href="view_groups.php" style="color:#000;">View Groups</a>
							</div>
                        </div>
					</div>
                   
                    <div class="clearfix"></div>
                    <!-- END DASHBOARD STATS 1-->


					<!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title" style="background:#efefef;padding:7px;font-size:17px;">Area
                        <!--<small>Statistics</small>-->
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="add_area.php" ><img src="images/1467997750_location-icon.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="add_area.php" style="color:#000;">Add Area</a>
							</div>
                        </div>

						
					
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="view_area.php" ><img src="images/1468025122_miscellaneous-31.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="view_area.php" style="color:#000;">View Area</a>
							</div>
                        </div>
                    </div>
					
						<!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title" style="background:#efefef;padding:7px;font-size:17px;">Question and Answer
                        <!--<small>Statistics</small>-->
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="add_question.php" ><img src="images/1468088203_EditDocument.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="add_question.php" style="color:#000;">Add Question and Answer</a>
							</div>
                        </div>

						
					
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:60px;" class="col-md-6">
								<a href="view_qstn_ans.php" ><img src="images/1468088203_EditDocument.png" style="height:50px;width:50px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="view_qstn_ans.php" style="color:#000;">View Question and Answer</a>
							</div>
                        </div>
                    </div>
					
					
					 <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title" style="background:#efefef;padding:7px;font-size:17px;">User
                        <!--<small>Statistics</small>-->
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:65px;" class="col-md-6">
								<a href="add_user.php" ><img src="images/change-user-512.gif" style="height:45px;width:60px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="add_user.php" style="color:#000;">Add User</a>
							</div>
                        </div>
						
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div style="height:60px;width:65px;" class="col-md-6">
								<a href="view_user.php" ><img src="images/change-user-512.gif" style="height:45px;width:60px;" /></a>
							</div>
							<div class="col-md-6" style="font-size:13px;padding-top:17px;">
								<a href="view_user.php" style="color:#000;">View User</a>
							</div>
                        </div>

                    </div>
					
                    <div class="clearfix"></div>
					
					
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
		<?php include('footer.php'); ?>
    </body>

</html>