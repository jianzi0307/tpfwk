<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<head>
	<meta charset="utf-8" />
	<title>Admin Dashboard</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="/Public/media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/media/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/media/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/media/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="/Public/media/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES --> 
	<link href="/Public/media/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/media/css/daterangepicker.css" rel="stylesheet" type="text/css" />
	<link href="/Public/media/css/fullcalendar.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/media/css/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="/Public/media/css/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="/Public/media/css/jquery.tagsinput.css" />
	<link rel="stylesheet" type="text/css" href="/Public/media/css/multi-select-metro.css" />
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="/Public/media/image/favicon.ico" />
</head>

<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
	
		<!-- BEGIN HEADER -->
		<div class="header navbar navbar-inverse navbar-fixed-top">
			<!-- BEGIN TOP NAVIGATION BAR -->
			<div class="navbar-inner">
				<div class="container-fluid">
					<!-- BEGIN LOGO -->
					<a class="brand" style="margin-left:5px;" href="/admin/">
					<!-- <img src="/Public/media/image/logo.png" alt="logo"/> -->
					 Admin Dashboard
					</a>
					<!-- END LOGO -->
					<!-- BEGIN RESPONSIVE MENU TOGGLER -->
					<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
					<img src="/Public/media/image/menu-toggler.png" alt="" />
					</a>          
					<!-- END RESPONSIVE MENU TOGGLER -->            
					<ul class="nav pull-right">
						<li class="dropdown user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img alt="" src="/Public/media/image/avatar1_small.jpg" />
						<span class="username"><?php echo ($uname); ?></span>
						<i class="icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<!--<li><a href="#"><i class="icon-user"></i> My Profile</a></li> -->
							<li><a href="/admin/logout"><i class="icon-signout"></i> Log Out</a></li>
						</ul>
					</li>
					</ul>
				</div>
			</div>
			<!-- END TOP NAVIGATION BAR -->
		</div>
	
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar nav-collapse collapse">
			
				<!-- BEGIN SIDEBAR MENU -->        
				<ul class="page-sidebar-menu">
					<li>
						<div class="sidebar-toggler hidden-phone"></div>
					</li>
					<li></li>
					<li class="start ">
						<a href="/admin/">
						<i class="icon-home"></i> 
						<span class="title">首页</span>
						</a>
					</li>
					<li class="">
						<a href="/admin/">
						<i class="icon-cog"></i> 
						<span class="title">系统管理</span>
						<span class="arrow "></span>
						</a>
						<ul class="sub-menu">
							<li>
								<a href="/admin/sysmanage/usergroup">
								<i class="icon-group"></i>
								系统用户组
                                </a>
								
							</li>
							<li >
								<a href="/admin/sysmanage/users">
								<i class="icon-user"></i>
								系统用户</a>
							</li>
							
							<li>
								<a href="/admin/sysmanage/privileges">
								<i class="icon-magic"></i> 
								权限管理
								</a>
							</li>
							<li>
								<a href="/admin/sysmanage/logs">
								<i class="icon-bar-chart"></i> 
								系统日志
								</a>
							</li>
						</ul>
					</li>
					<li class="">
						<a href="/admin/sysdeveloper">
						<i class="icon-coffee"></i> 
						<span class="title">开发者</span>
						<span class="arrow "></span>
						</a>
						<ul class="sub-menu">
							<li >
								<a href="/admin/sysdeveloper/genmodule">
								<i class="icon-cogs"></i>
								生成模块</a>
							</li>
							<li>
								<a href="/admin/sysdeveloper/genmodel">
								<i class="icon-table"></i> 
								生成模型
								</a>
							</li>
							<li>
								<a href="/admin/sysdeveloper/genctl">
								<i class="icon-sitemap"></i> 
								生成控制器
								</a>
							</li>
						</ul>
					</li>
				</ul>
				<!-- END SIDEBAR MENU -->
			
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div class="page-content">
			
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				
	<!-- BEGIN PAGE HEADER-->
	<div class="row-fluid">
		<div class="span12">
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->
			<ul class="breadcrumb">
				<li>
					<i class="icon-cogs"></i>
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li>
			</ul>
			<!-- END PAGE TITLE & BREADCRUMB-->
		</div>
	</div>
	<!-- END PAGE HEADER-->

				<div id="dashboard">
					
	sss
 
				</div>
			</div>
			<!-- END PAGE CONTAINER-->   
		</div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->
	
		<!-- BEGIN FOOTER -->
		<div class="footer">
			<div class="footer-inner">
				2015 &copy;
			</div>
			<div class="footer-tools">
				<span class="go-top">
				<i class="icon-angle-up"></i>
				</span>
			</div>
		</div>
		<!-- END FOOTER -->
		<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
		<script src="/Public/media/js/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="/Public/media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="/Public/media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="/Public/media/js/bootstrap.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script src="/Public/media/js/excanvas.min.js"></script>
	<script src="/Public/media/js/respond.min.js"></script>  
	<![endif]-->   
	<script src="/Public/media/js/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="/Public/media/js/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="/Public/media/js/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="/Public/media/js/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="/Public/media/js/select2.min.js"></script>
	<script type="text/javascript" src="/Public/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="/Public/media/js/DT_bootstrap.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="/Public/media/js/app.js"></script>
	<script type="text/javascript" src="/Public/media/js/select2.min.js"></script>

	<script src="/Public/media/js/table-managed.js"></script>
	<script type="text/javascript" src="/Public/media/js/jquery.multi-select.js"></script> 
	<script src="/Public/media/js/form-components.js"></script>  
	<script src="/Public/media/js/generator.js"></script>
	<script>
		jQuery(document).ready(function() {      
		   App.init();
		   GenModule.init();
		   TableManaged.init();
		   FormComponents.init();
		   
		});
	</script>
	<!-- END JAVASCRIPTS -->
	
</body>
<!-- END BODY -->
</html>