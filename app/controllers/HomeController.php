<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	/*
	*show  main page
	*/	
	public function showMainPage()
	{	    		
		return View::make('main');
	}
	
	/*
	*show time line page
	*/	
	public function showTimelinePage()
	{	    		
		return View::make('timeline');
	}
	
	/*
	*show create new log page
	*/	
	public function showCreatePage()
	{	    		
		return View::make('create');
	}
	
	/*
	*show log detail page
	*/	
	public function showLogDetailPage()
	{	    		
		return View::make('detail');
	}
	
	/*
	* For Test
	*/	
	public function showUploadPage()
	{	    		
		return View::make('upload');
	}
}
