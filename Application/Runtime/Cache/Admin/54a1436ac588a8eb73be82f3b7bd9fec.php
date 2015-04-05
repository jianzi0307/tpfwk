<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Metronic | Form Stuff - Form Components</title>
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
	<link rel="stylesheet" type="text/css" href="/Public/media/css/bootstrap-fileupload.css" />
	<link rel="stylesheet" type="text/css" href="/Public/media/css/jquery.gritter.css" />
	<link rel="stylesheet" type="text/css" href="/Public/media/css/chosen.css" />
	<link rel="stylesheet" type="text/css" href="/Public/media/css/select2_metro.css" />
	<link rel="stylesheet" type="text/css" href="/Public/media/css/jquery.tagsinput.css" />
	<link rel="stylesheet" type="text/css" href="/Public/media/css/clockface.css" />
	<link rel="stylesheet" type="text/css" href="/Public/media/css/bootstrap-wysihtml5.css" />
	<link rel="stylesheet" type="text/css" href="/Public/media/css/datepicker.css" />
	<link rel="stylesheet" type="text/css" href="/Public/media/css/timepicker.css" />
	<link rel="stylesheet" type="text/css" href="/Public/media/css/colorpicker.css" />
	<link rel="stylesheet" type="text/css" href="/Public/media/css/bootstrap-toggle-buttons.css" />
	<link rel="stylesheet" type="text/css" href="/Public/media/css/daterangepicker.css" />
	<link rel="stylesheet" type="text/css" href="/Public/media/css/datetimepicker.css" />
	<link rel="stylesheet" type="text/css" href="/Public/media/css/multi-select-metro.css" />
	<link href="/Public/media/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
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
					<i class="icon-table"></i>
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">模型</a></li>
			</ul>
			<!-- END PAGE TITLE & BREADCRUMB-->
		</div>
	</div>
	<!-- END PAGE HEADER-->

				<div id="dashboard">
					
	<div class="portlet box light-grey">
		<div class="portlet-title">
			<div class="caption"><i class="icon-table"></i>生成模型</div>
			<div class="tools">
				<a href="javascript:;" class="collapse"></a>
			</div>
		</div>
		<div class="portlet-body form">
			<form action="#" class="form-horizontal">
				<div class="control-group">
					<label class="control-label">选择模块</label>
					<div class="controls">
						<select id="selectmoudle" class="span6 chosen" data-placeholder="选择模块" tabindex="1">
							<option value=""></option>
							<?php if(is_array($modules)): foreach($modules as $key=>$module): ?><option value="<?php echo ($module); ?>"><?php echo ($module); ?></option><?php endforeach; endif; ?>
						</select>
						<span class="help-inline">必选</span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">选择数据表</label>
					<div class="controls">
						<select id="selecttable" data-placeholder="选择数据表" class="chosen span6" multiple="multiple" tabindex="6">
							<option value=""></option>
							<optgroup label="数据表">
								<?php if(is_array($tables)): foreach($tables as $key=>$table): ?><option value='<?php echo ($table); ?>'><?php echo ($table); ?></option><?php endforeach; endif; ?>
							</optgroup>
						</select>
						<span class="help-inline">必选</span>
					</div>
				</div>
				<hr>
				<div class="control-group">
					<label class="control-label">关联类型</label>
					<div class="controls">
						<select id="relationmodel" class="span6 m-wrap" data-placeholder="选择关联类型" tabindex="1">
							<option value="">选择...</option>
							<option value="HAS_ONE">HAS_ONE</option>
							<option value="HAS_MANY">HAS_MANY</option>
							<option value="BELONGS_TO">BELONGS_TO</option>
							<option value="MANY_TO_MANY">MANY_TO_MANY</option>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">对应数据表</label>
					<div class="controls">
						<select id="subtable" class="span6 m-wrap" data-placeholder="选择关联的表" tabindex="1">
							<option value="">选择...</option>
							<?php if(is_array($tables)): foreach($tables as $key=>$table): ?><option value='<?php echo ($table); ?>'><?php echo ($table); ?></option><?php endforeach; endif; ?>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">关系表（多对多）</label>
					<div class="controls">
						<select id="relationtable" class="span6 m-wrap" data-placeholder="选择关系表" tabindex="1">
							<option value="">选择...</option>
							<?php if(is_array($tables)): foreach($tables as $key=>$table): ?><option value='<?php echo ($table); ?>'><?php echo ($table); ?></option><?php endforeach; endif; ?>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">关联名</label>
					<div class="controls">
						<input id="relationname" type="text" class="span3" />
						<span class="help-inline">mapping_name,不要和当前模型的字段有重复</span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">预览</label>
					<div class="controls">
						<textarea class="span8 m-wrap" rows="10"></textarea>
					</div>
				</div>
				<div class="form-actions">
					<button id="btn1" class="btn">1 > 生成预览</button>
					<button id="btn2" class="btn">2 > 追加关联代码</button>
					<button id="btn3" class="btn green">3 > 生成模型文件</button>
				</div>
			</form>
		</div>
	</div>
 
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
			2013 &copy; Metronic by keenthemes.
		</div>
		<div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
		</div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->
	<script src="/Public/media/js/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="/Public/media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="/Public/media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="/Public/media/js/bootstrap.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script src="media/js/excanvas.min.js"></script>
	<script src="media/js/respond.min.js"></script>  
	<![endif]-->   
	<script src="/Public/media/js/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="/Public/media/js/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="/Public/media/js/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="/Public/media/js/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="/Public/media/js/ckeditor.js"></script>  
	<script type="text/javascript" src="/Public/media/js/bootstrap-fileupload.js"></script>
	<script type="text/javascript" src="/Public/media/js/chosen.jquery.min.js"></script>
	<script type="text/javascript" src="/Public/media/js/select2.min.js"></script>
	<script type="text/javascript" src="/Public/media/js/wysihtml5-0.3.0.js"></script> 
	<script type="text/javascript" src="/Public/media/js/bootstrap-wysihtml5.js"></script>
	<script type="text/javascript" src="/Public/media/js/jquery.tagsinput.min.js"></script>
	<script type="text/javascript" src="/Public/media/js/jquery.toggle.buttons.js"></script>
	<script type="text/javascript" src="/Public/media/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="/Public/media/js/bootstrap-datetimepicker.js"></script>
	<script type="text/javascript" src="/Public/media/js/clockface.js"></script>
	<script type="text/javascript" src="/Public/media/js/date.js"></script>
	<script type="text/javascript" src="/Public/media/js/daterangepicker.js"></script> 
	<script type="text/javascript" src="/Public/media/js/bootstrap-colorpicker.js"></script>  
	<script type="text/javascript" src="/Public/media/js/bootstrap-timepicker.js"></script>
	<script type="text/javascript" src="/Public/media/js/jquery.inputmask.bundle.min.js"></script>   
	<script type="text/javascript" src="/Public/media/js/jquery.input-ip-address-control-1.0.min.js"></script>
	<script type="text/javascript" src="/Public/media/js/jquery.multi-select.js"></script>   
	<script src="/Public/media/js/bootstrap-modal.js" type="text/javascript" ></script>
	<script src="/Public/media/js/bootstrap-modalmanager.js" type="text/javascript" ></script> 
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="/Public/media/js/app.js"></script>
	<script src="/Public/media/js/form-components.js"></script>  
	<script src="/Public/media/js/generator.js"></script>   
	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
		jQuery(document).ready(function() {       
		   // initiate layout and plugins
		   App.init();

		   GenModel.init();
		   FormComponents.init();
		});
	</script>

</body>
<!-- END BODY -->
</html>