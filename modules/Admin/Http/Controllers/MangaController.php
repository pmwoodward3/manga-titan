<?php namespace Modules\Admin\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class MangaController extends Controller {
	
	public function index()
	{
		return view('admin::manga');
	}

	public function create()
	{
		return view('admin::manga.create');
	}

	public function detail($manga_id)
	{
		return view('admin::manga.detail');
	}
	
}