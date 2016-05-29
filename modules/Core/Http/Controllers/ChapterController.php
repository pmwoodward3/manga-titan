<?php namespace Modules\Core\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class ChapterController extends Controller {
	
	public function index()
	{
		return view('Core::index');
	}
	
}