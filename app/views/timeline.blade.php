@extends('layouts.metronic.dashboard')

@section('title')
My Log
@stop

@section('page_title')
Combat Record
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
			Timeline			
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
										
					<li class="active">
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
	<ul class="timeline">
    <li><div class="tldate">Apr 2014</div></li>
    
    <li>
      <div class="tl-circ"></div>
      <div class="timeline-panel">
        <div class="tl-heading">
          <h4>Surprising Headline Right Here</h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 3 hours ago</small></p>
        </div>
        <div class="tl-body">
          <p>Lorem Ipsum and such.</p>
        </div>
      </div>
    </li>
    
    <li class="timeline-inverted">
      <div class="tl-circ"></div>
      <div class="timeline-panel">
        <div class="tl-heading">
          <h4>Breaking into Spring!</h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 4/07/2014</small></p>
        </div>
        <div class="tl-body">
          <p>Hope the weather gets a bit nicer...</p>
            
          <p>Y'know, with more sunlight.</p>
        </div>
      </div>
    </li>
    
    <li><div class="tldate">Mar 2014</div></li>
    
    <li>
      <div class="tl-circ"></div>
      <div class="timeline-panel">
        <div class="tl-heading">
          <h4>New Apple Device Release Date</h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 3/22/2014</small></p>
        </div>
        <div class="tl-body">
          <p>In memory of Steve Jobs.</p>
        </div>
      </div>
    </li>
	
	<li class="timeline-inverted">
      <div class="tl-circ"></div>
      <div class="timeline-panel">
        <div class="tl-heading">
          <h4>Test Panel 1</h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 3/22/2014</small></p>
        </div>
        <div class="tl-body">
          <p>In memory of Steve Jobs.</p>
        </div>
      </div>
    </li>
	
    <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="tl-heading">
          <h4>No icon here</h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 3/16/2014</small></p>
        </div>
        <div class="tl-body">
          <p>Here you'll find some beautiful photography for your viewing pleasure, courtesy of <a href="http://lorempixel.com/">lorempixel</a>.</p>
          
          <p><img src="http://lorempixel.com/600/300/nightlife/" alt="lorem pixel"></p>
        </div>
		<h5><h5>
	  <div class="text-center">
		<a href="#" class="btn blue">
		More Detail <i class="m-icon-swapright m-icon-white"></i>
		</a>
	  </div>
      </div>
    </li>
    <li>
      <div class="tl-circ"></div>
      <div class="timeline-panel">
        <div class="tl-heading">
          <h4>Some Important Date!</h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 3/03/2014</small></p>
        </div>
        <div class="tl-body">
          <p>Write up a quick summary of the event.</p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel noarrow">
        <div class="tl-heading">
          <h4>Secondary Timeline Box</h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 3/01/2014</small></p>
        </div>
        <div class="tl-body">
          <p>This might be a follow-up post with related info. Maybe we include some extra links, tweets, user comments, photos, etc.</p>
        </div>
      </div>
    </li>
    
    <li><div class="tldate">Feb 2014</div></li>
    
    <li class="timeline-inverted">
      <div class="tl-circ"></div>
      <div class="timeline-panel">
        <div class="tl-heading">
          <h4>The Winter Months</h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 02/23/2014</small></p>
        </div>
        <div class="tl-body">
          <p>Gee time really flies when you're having fun.</p>
        </div>
      </div>
    </li>
    <li>
      <div class="tl-circ"></div>
      <div class="timeline-panel">
        <div class="tl-heading">
          <h4>Yeah we're pretty much done here</h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 02/11/2014</small></p>
        </div>
        <div class="tl-body">
          <p>Wasn't this fun though?</p>
        </div>
		<div>
		<a href="#" class="btn blue">
		More Detail <i class="m-icon-swapright m-icon-white"></i>
		</a>
	  </div>
      </div>
    </li>
  </ul>
  <!-- END TIMELINE  -->
				
@stop

@section('page_script')
@parent

 {{ HTML::script('js/pages/datatable-myorder.js') }}  <!-- Build datatable scripts-->
 {{ HTML::style('css/timeline-styles.css') }}  <!-- Build css for timeline -->
 
@stop