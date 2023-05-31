
			<!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper hide">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler"> </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <li class="nav-item start <?php if($page_name == 'dashboard.php') { ?>active open<?php } ?>">
                            <a href="dashboard.php" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="nav-item <?php echo(($page_name == 'people_upload.php' || $page_name == 'people_view.php')?'active open':''); ?> ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-list-alt"></i>
                                <span class="title">Peoples</span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu"  >
                                <li class="nav-item <?php echo(($page_name == 'people_upload.php')?'active':''); ?> ">
                                    <a href="people_upload.php" class="nav-link nav-toggle">
										<i class="fa fa-circle"></i>
                                        <span class="title">Add People</span>
                                    </a>
                                </li>
								<li class="nav-item <?php echo(($page_name == 'people_view.php')?'active':''); ?>  ">
                                    <a href="people_view.php" class="nav-link nav-toggle">
										<i class="fa fa-circle"></i>
                                        <span class="title">View People</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                      
						
						<li class="nav-item <?php echo(($page_name == 'mission_add.php' || $page_name == 'mission_view.php')?'active open':''); ?> ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-user"></i>
                                <span class="title">Missions</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php echo(($page_name == 'mission_add.php')?'active':''); ?> ">
                                    <a href="mission_add.php" class="nav-link nav-toggle">
										<i class="fa fa-black-tie"></i>
                                        <span class="title">Add Mission</span>
                                    </a>
                                </li>
								<li class="nav-item <?php echo(($page_name == 'mission_view.php')?'active':''); ?> ">
                                    <a href="mission_view.php" class="nav-link nav-toggle">
										<i class="fa fa-black-tie"></i>
                                        <span class="title">View Mission</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item <?php echo(($page_name == 'add_user.php' || $page_name == 'view_user.php')?'active open':''); ?> ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-user"></i>
                                <span class="title">Activities</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php echo(($page_name == 'add_user.php')?'active':''); ?> ">
                                    <a href="add_user.php" class="nav-link nav-toggle">
										<i class="fa fa-black-tie"></i>
                                        <span class="title">Add User</span>
                                    </a>
                                </li>
								<li class="nav-item <?php echo(($page_name == 'view_user.php')?'active':''); ?> ">
                                    <a href="view_user.php" class="nav-link nav-toggle">
										<i class="fa fa-black-tie"></i>
                                        <span class="title">View User</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                       
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->