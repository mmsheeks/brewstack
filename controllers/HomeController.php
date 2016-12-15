<?php

namespace App;

use Homebrew\Core\Controller;

/**
 * HomeController - A sample user defined controller class in the App namespace
 *
 * Notes
 * 	To use this class, add new routes to the routes.yml file in the application root directory
 * 	You can also add new views in the "views" folder, as well as using Models, if models are defined
 * 	and you have a database in place. For full documentation, please see labix.co/homebrew
 *
 * @author Martin Sheeks <martin.sheeks@gmail.com>
 * @version 1.0.4
 *
 */
class HomeController extends Controller {

	/*
	 * index - a sample user defined function for handling the home page
	 *
	 * @author Martin Sheeks <martin.sheeks@gmail.com>
	 * @version 1.0.4
	 */
	public function index() {
		return $this->view('hello');
	}
	
}