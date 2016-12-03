<?php

namespace App;

use Homebrew\Core\Controller;
use Homebrew\Core\Response;

class HomeController extends Controller {

	function fooBar() {
		Response::view('hello', $this->request->all() );
	}
	
}