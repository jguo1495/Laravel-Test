@extends('layouts.metronic.dashboard')

@section('title')
My Log
@stop

@section('page_title')
Welcome to My Log
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
		</li>
	</ul>

@stop

@section('sidebar')
				<!-- BEGIN SIDEBAR MENU -->
				<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
					<li class="active">
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
					
					<li>
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
	
	<!-- BEGIN My order List PORTLET-->
	<div class="portlet box blue-hoki" id="myOrderListDiv">
		<div class="portlet-title">
			<div class="caption">
				<i class="fa fa-table"></i>My Order List
			</div>
			<div class="tools">
			<a href="javascript:;" class="fullscreen"></a>
			</div>
		</div>
		<div class="portlet-body">



		</div>
	</div>
	<!-- END My order List TABLE PORTLET-->

	<!-- BEGIN TABLE PORTLET-->
	<!--show finished order list -->
	<div class="portlet box red" id="myFinishedOrderListDiv">
		<div class="portlet-title">
			<div class="caption">
				<i class="fa fa-table"></i>My Finished Order List
			</div>
			<div class="tools">
			<a href="javascript:;" class="fullscreen"></a>
			</div>
		</div>
		<div class="portlet-body">
		
		</div>
	</div>
	<!-- END TABLE PORTLET-->			
	
	<div class="row">
				<div class="col-md-3 col-md-offset-4"> <!-- center a div-->
				<div class="well">
				<!--Add Button -->
				<button class="btn blue btn-block btn-lg m-icon-big" onclick="window.location='{{ URL::to('pf') }}'">
				Create New Order <i class="icon-control-play"></i></button>
				</div>
				</div>
		</div>
				
@stop

@section('page_script')
@parent

 {{ HTML::script('js/pages/datatable-myorder.js') }}  <!-- Build datatable scripts-->
 
@stop