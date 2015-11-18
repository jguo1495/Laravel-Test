<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.0
Version: 3.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<!-- Put your title here -->
<title>
@yield('title')
</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>

<!-- BEGIN GLOBAL MANDATORY STYLES -->
{{ HTML::style('css/google.css') }}
{{ HTML::style('metronic/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}
{{ HTML::style('metronic/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}
{{ HTML::style('metronic/assets/global/plugins/bootstrap/css/bootstrap.min.css') }}
{{ HTML::style('metronic/assets/global/plugins/uniform/css/uniform.default.css') }}
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
{{ HTML::style('metronic/assets/admin/pages/css/login.css') }}
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
{{ HTML::style('metronic/assets/global/css/components.css') }}
{{ HTML::style('metronic/assets/global/css/plugins.css') }}
{{ HTML::style('metronic/assets/admin/layout2/css/layout.css') }}
{{ HTML::style('metronic/assets/admin/layout2/css/themes/default.css') }}
{{ HTML::style('metronic/assets/admin/layout2/css/custom.css') }}
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="http://acnw.com.au">
	{{ HTML::image('metronic/assets/admin/layout2/img/logo-acnw.png', 'logo', array('class' => 'logo-default')) }}
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
@yield('content')
</div>
<div class="copyright">
	 2014 &copy; Powered By itciti.com.au
</div>
<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
 {{ HTML::script('metronic/assets/global/plugins/jquery.min.js') }} 
 {{ HTML::script('metronic/assets/global/plugins/jquery-migrate.min.js') }} 
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
 {{ HTML::script('metronic/assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js') }} 
 {{ HTML::script('metronic/assets/global/plugins/bootstrap/js/bootstrap.min.js') }} 
 {{ HTML::script('metronic/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }} 
 {{ HTML::script('metronic/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }} 
 {{ HTML::script('metronic/assets/global/plugins/jquery.blockui.min.js') }} 
 {{ HTML::script('metronic/assets/global/plugins/jquery.cokie.min.js') }}
 {{ HTML::script('metronic/assets/global/plugins/uniform/jquery.uniform.min.js') }}
 {{ HTML::script('metronic/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
 {{ HTML::script('metronic/assets/global/plugins/select2/select2.min.js') }}
 {{ HTML::script('metronic/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js') }}
 {{ HTML::script('metronic/assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js') }}
 {{ HTML::script('metronic/assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js') }}
 {{ HTML::script('metronic/assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js') }}
 {{ HTML::script('metronic/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js') }}
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS AND ADD NEW SCRIPTS-->
@section('page_script')
 {{ HTML::script('metronic/assets/global/scripts/metronic.js') }}
 {{ HTML::script('metronic/assets/admin/layout2/scripts/layout.js') }}
 {{ HTML::script('metronic/assets/admin/layout2/scripts/demo.js') }}
 {{ HTML::script('metronic/assets/admin/pages/scripts/login.js') }}
@show
 
<script>
      jQuery(document).ready(function() {    
         Metronic.init(); // init metronic core components
		 Layout.init(); // init current layout
         Demo.init(); // init demo features
		
      });
</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>