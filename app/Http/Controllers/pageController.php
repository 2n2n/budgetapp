<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class pageController extends Controller
{

	public function __construct() {
		parent::__construct();
	}

   	function dashboard() {
        return view('pages.dashboard', $this->viewData);
   	}
}
