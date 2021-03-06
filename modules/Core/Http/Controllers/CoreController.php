<?php
namespace Modules\Core\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Illuminate\Http\Request;

class CoreController extends Controller {

	protected $actions;
	protected $defresponse;

	public function __construct() {
		$this->registerAction();
	}
	
	public function ajaxProcessor(Request $request) {
		if (array_key_exists($request->client_action, $this->actions)) {
			$result = call_user_func($this->actions[$request->client_action], $request->data);
			if (! empty($result)) {
				$result['new_csrf'] = csrf_token();
				return response()->json($result);
			}
		}
		return response()->json($this->defresponse);
	}

	public function registerAction() {
		$this->defresponse = ['message' => 'Undefined user action', 'success' => false, 'new_csrf' => csrf_token()];
		$this->actions = [
			'get-country'		=> __NAMESPACE__.'\GeneralController::getCountry',
			'get-month'			=> __NAMESPACE__.'\GeneralController::getMonth',
			'get-year'			=> __NAMESPACE__.'\GeneralController::getYear',
			
			'get-category'		=> __NAMESPACE__.'\CategoryController::getData',
			'save-category'		=> __NAMESPACE__.'\CategoryController::saveData',
			'delete-category'	=> __NAMESPACE__.'\CategoryController::deleteData',
			'source-category'	=> __NAMESPACE__.'\CategoryController::sourceData',
			'get-home-category'	=> __NAMESPACE__.'\CategoryController::getHomeList',

			'get-tags'			=> __NAMESPACE__.'\TagsController::getData',
			'save-tags'			=> __NAMESPACE__.'\TagsController::saveData',
			'delete-tags'		=> __NAMESPACE__.'\TagsController::deleteData',
			'source-tags'		=> __NAMESPACE__.'\TagsController::sourceData',
			'get-all-tags'		=> __NAMESPACE__.'\TagsController::getAllTags',

			'get-user'			=> __NAMESPACE__.'\UserController::getData',
			'save-user'			=> __NAMESPACE__.'\UserController::saveData',
			'delete-user'		=> __NAMESPACE__.'\UserController::deleteData',
			'change-email'		=> __NAMESPACE__.'\UserController::changeEmail',

			'get-comment'		=> __NAMESPACE__.'\CommentController::getData',
			'delete-comment'	=> __NAMESPACE__.'\CommentController::deleteData',

			'get-manga'			=> __NAMESPACE__.'\MangaController::getData',
			'save-manga'		=> __NAMESPACE__.'\MangaController::saveData',
			'delete-manga'		=> __NAMESPACE__.'\MangaController::deleteData',
			'detail-manga'		=> __NAMESPACE__.'\MangaController::detailData',
			
			'get-page'			=> __NAMESPACE__.'\PageController::getData',
			'save-page'			=> __NAMESPACE__.'\PageController::saveData',
			'delete-page'		=> __NAMESPACE__.'\PageController::deleteData',
			'get-thumb-page'	=> __NAMESPACE__.'\PageController::getThumbs',
			'get-pages-for-read'=> __NAMESPACE__.'\PageController::getPages',

			'get-comment'		=> __NAMESPACE__.'\CommentController::getData',
			'save-comment'		=> __NAMESPACE__.'\CommentController::saveData',
			'delete-comment'	=> __NAMESPACE__.'\CommentController::deleteData',
		];
	}
	
}