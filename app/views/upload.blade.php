@extends('layouts.metronic.dashboard')

@section('title')
Create New Log
@stop

@section('page_title')
Create New Log
@stop


@section('navigation_right')
Hello,{{Auth::user()->name}}
@stop	

@section('breadcrumb')

	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			My Log
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="{{URL::to('main')}}">Dashboard</a>	
			<i class="fa fa-angle-right"></i>			
		</li>
		<li>
			Create New Log				
		</li>
	</ul>

@stop

@section('sidebar')
				<!-- BEGIN SIDEBAR MENU -->
				<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
					<li>
						<a href="{{ URL::to('main') }}">
						<i class="icon-home"></i>
						<span class="title">Dashboard</span>
						</a>
					</li>
										
					<li>
						<a href="{{ URL::to('timeline') }}">
						<i class="icon-login"></i>
						<span class="title">Timeline</span>
						</a>
					</li>
					
					<li class="active">
						<a href="{{ URL::to('create') }}">
						<i class=" icon-power"></i>
						<span class="title">Create New Log</span>
						</a>
					</li>					
				</ul>
				<!-- END SIDEBAR MENU -->
@stop


@section('content')

  {{ Form::open(array('url'=>'savelog','files'=>true,'method'=>'post')) }}
  
  {{ Form::label('file','File',array('id'=>'','class'=>'')) }}
  {{ Form::file('image','',array('id'=>'','class'=>'')) }}
  <br/>
  <!-- submit buttons -->
  {{ Form::submit('Save') }}
  
  <!-- reset buttons -->
  {{ Form::reset('Reset') }}
  
  {{ Form::close() }}
  
  									<div class="row">
										<div class="col-md-7 responsive-1024">
											<!-- This is the image we're attaching Jcrop to -->
											<img src="upload-images/3.jpg" id="combat_image" alt="Jcrop Example"/>
										</div>
										<div class="col-md-5 responsive-1024">
											<h4>An example server-side crop script.</h4>
											<p>
												 Hidden form values are set when a selection is made. If you press the <i>Crop Image</i>
												button, the form will be submitted and a 150x150 thumbnail will be dumped to the browser. Try it!
											</p>
											<!-- This is the form that our event handler fills -->
											<form action="../../assets/global/plugins/jcrop/crop-demo.php" target="_blank" method="post" id="demo8_form">
												<input type="hidden" id="crop_x" name="x"/>
												<input type="hidden" id="crop_y" name="y"/>
												<input type="hidden" id="crop_w" name="w"/>
												<input type="hidden" id="crop_h" name="h"/>
												<input type="submit" value="Crop Image" class="btn btn-large green"/>
											</form>
										</div>
									</div>
  
 
  
  
@stop


@section('page_script')
@parent

 {{ HTML::script('js/pages/datatable-myorder.js') }}  <!-- Build datatable scripts-->
 <!--Build Jcrop for images process -->
 {{ HTML::script('metronic/assets/global/plugins/jcrop/js/jquery.Jcrop.min.js') }}
 {{ HTML::script('js/pages/image-crop.js') }}
 
 <!--Build Styles for this page -->
 {{ HTML::style('metronic/assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css') }}
 {{ HTML::style('metronic/assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css') }}
 
@stop