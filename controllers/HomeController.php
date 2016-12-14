<?php

namespace App;

use Homebrew\Core\Controller;
use Homebrew\Core\Response;

use Models\Order;

class HomeController extends Controller {

	function index() {
		Response::view('hello', $this->request->all() );
	}
	
}