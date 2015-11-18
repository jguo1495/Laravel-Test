@extends('layouts.metronic.dashboard')

@section('title')
My Log
@stop

@section('page_title')
Log Detail
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
			<a href="{{URL::to('timeline')}}">Timeline</a>					
			<i class="fa fa-angle-right"></i>			
		</li>
		<li>
			Log Detail	
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
					
					<li >
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
	
	<!-- BEGIN PAGE CONTENT-->

    <!-- END PAGE CONTENT  -->
				
@stop

@section('page_script')
@parent

 {{ HTML::script('js/pages/datatable-myorder.js') }}  <!-- Build datatable scripts-->
 
@stop