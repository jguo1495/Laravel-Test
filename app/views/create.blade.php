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

    <!-- will be used to show any messages -->
	@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif 	
	
						<!-- BEGIN SAMPLE FORM PORTLET-->
	<div class="portlet box blue col-md-8 col-md-offset-2">
		<div class="portlet-title">
			<div class="caption">
				<i class="fa fa-gift"></i> Post Form
			</div>
				<div class="tools">
				<!-- Build tools-->
				</div>
		</div>
	<div class="portlet-body form">
		
	<div class="form-body">
    <div class="row">		
  <div class="form-group"><!-- Customer name text field -->
    <label for="formCustomer" class="col-sm-3 control-label">Title</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="formCustomer" name="customerName" placeholder="Customer Name">
    </div>
  </div>
  </div><br>
  <div class="row">
  <div class="form-group">
    <label for="formCName" class="col-sm-3 control-label">Comment</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" title="Project Chinese name and English name can be the same" id="formCName" name="projectCName" placeholder="Project's Chinese name">
    </div>
  </div>
  </div><br>
  
    <div class="row">
		<div class="form-group">
			<label for="formCName" class="col-sm-3 control-label">Featured Image</label>
				<div class="col-sm-6">
			<span class="btn blue fileinput-button">
			<i class="fa fa-plus"></i>
			<span>Add Image</span>
			<input type="file" name="image" multiple="">
			</span>
				</div>
		</div>
    </div><br>
	
	<div class="row">
		<div class="form-group">
			<label for="formCName" class="col-sm-3 control-label">Combat Log</label>
				<div class="col-sm-6">
			<span class="btn blue fileinput-button">
			<i class="fa fa-plus"></i>
			<span>Add Log</span>
			<input type="file" name="log">
			</span>
				</div>
		</div>
    </div><br>
	
	<!-- The table listing the files available for upload/download -->
	<table role="presentation" class="table table-striped clearfix">
	<tbody class="files">
	</tbody>
	</table>
  
     <div class="row">
		<div class="form-group"> 
		<div class="text-center">
		<button type="button" class="addButton btn-default">Submit Log</button>
		</div>
		</div>
	</div>
	</div>

	</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->	

@stop


@section('page_script')
@parent

 {{ HTML::script('js/pages/datatable-myorder.js') }}  <!-- Build datatable scripts-->
 <!--Build Styles for this page -->
 {{ HTML::style('metronic/assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css') }}
 {{ HTML::style('metronic/assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css') }}
 
@stop