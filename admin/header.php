<?php
	include("config.php");
		

	// $result = $mysqli->query($mysqli,$admin);

	?> 
		
		<!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="dashboard.php" style="text-decoration:none">
                    <img src="images/logo.png" style="height:30px;width:150px;margin-top:8px;">
					
					</a>
					
                    <div class="menu-toggler sidebar-toggler"> </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
				
                    <ul class="nav navbar-nav pull-right">
						<!-- BEGIN INBOX DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                      
                        <!-- END INBOX DROPDOWN -->
                        <!-- BEGIN USER LOGIN DROPDOWN -->
				
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="circle-notification badge-notification bg-success"></span>
									<img src="uploads/<?php echo $row['image'];?>" class="rs-nav-avatar img-circle" alt="Avatar" style="height:50px;width:50px;">
									<span class="visible-xs-inline-block m-l">Welcome, <strong><?php echo $row['name'];?></strong></span>
								</a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                
                                <li>
                                    <a href="user_settings.php">
                                        <i class="icon-settings"></i> Settings </a>
                                </li>
                                <li>
                                    <a href="logout.php">
                                        <i class="icon-key"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                    </ul>
				
					
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->