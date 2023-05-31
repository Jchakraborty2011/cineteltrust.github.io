<?php

  include ("config.php");
	$id = $_GET['id'];
	// sql to delete a record
$sql = "DELETE FROM people WHERE id='$id'";

if ($mysqli->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: ";
}

	
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
		<title>Admin</title>
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
                                <a href="#">People</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>View People</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title">View People
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
							<a href="people_upload.php" class="btn green"><i class="fa fa-plus"></i> Add People</a><br/><br/>
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-home font-dark"></i>
                                        <span class="caption-subject bold uppercase">View People</span>
                                    </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover dt-responsive" id="sample">
                                        <thead style="overflow-x:auto;">
                                            <tr>
												<th class="all"> Image</th>
                                                <th class="all"> Name</th>
                                                
												 <th class="all"> Description</th>
												 <th class="all"> Designation</th>
												
                                                <th class="desktop">Action</th>
												
                                            </tr>
                                        </thead>
                                        <tbody>
										
                                            <tr>
											<?php 

											$properties = 'SELECT * FROM people';

											$result = $mysqli->query($properties);

											while ($row=$result->fetch_assoc()) { 	
											$id=0;
											?> 
        
                                                <td>
                                                <img src="uploads/<?=$row['image']?>"width="100px">
                                                </td>
												<td><?php echo $row['name']?></td>
												<td><?php echo $row['description']?></td>
												<td><?php echo $row['designation']?></td>
												
												<td><a href="people_edit.php?page=people&action=add&id=<?php echo $row['id'] ?>" class="btn blue btn-outline sbold uppercase">Edit</a><a href="?page=people&action=delete&id=<?php echo $row['id'] ?>" class="btn red btn-outline sbold uppercase">Delete</a></td>
                                            </tr>
											<?php
											$id++;
											}
											?>	
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <?php include('footer.php') ?>
    </body>

</html>