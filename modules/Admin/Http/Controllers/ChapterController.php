<?php namespace Modules\Admin\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class ChapterController extends Controller {
	
	public function create()
	{
		return view('admin::chapter.create');
	}

	public function edit($manga_id, $chapter_id)
	{
		return view('admin::chapter.edit');
	}
	
}