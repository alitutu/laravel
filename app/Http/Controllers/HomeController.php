<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index($page)
	{
		if($page == 'home') {
			$data = [
				'main' =>
				'<h1 class="zdjd">Home</h1>
	        	<p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>',
	        	'sidebar' =>
				'<h3>Sidebar</h3>
	        	<p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>'
	        ];
	    }
	    elseif($page == 'about') {
			$data = [
				'main' =>
				'<h1>About</h1>
	        	<p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>',
	        	'sidebar' =>
				'<h3>Sidebar</h3>
	        	<p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>'
	        ];
	    }
	    else {
	    	$data = [
				'main' =>
				'<h1>403</h1>
	        	<p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>',
	        	'sidebar' =>
				'<h3>Sidebar</h3>
	        	<p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>'
	        ];
	    }
		return view('pages.home', ['data' => $data]);
	}

}
