<?php
namespace Modules\Core\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Entities\Manga;
use Modules\Core\Entities\MangaPage;
use Modules\Core\Entities\Category;
use File;

class ModelEventProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function boot() {
		Manga::deleting(function ($manga) {
			$pages = $manga->mangapages;
			if ($pages->count() > 0) {
				foreach ($pages as $page) {
					$page->delete();
				}
			}
			if ($manga->thumb != '') {
				if (File::exists(storage_path('image/'.$manga->thumb)))
					File::delete(storage_path('image/'.$manga->thumb));
			}
		});
		MangaPage::saving(function ($page) {
			$extension = File::extension($page->img_path);
			$newfilename = sprintf('%s-%s.%s', $page->id_manga, $page->page_num, $extension);
			if (File::exists(storage_path('image/'.$page->img_path)))
				File::move(storage_path('image/'.$page->img_path), storage_path('image/'.$newfilename));
			$page->img_path = $newfilename;
		});
		MangaPage::deleting(function ($page) {
			if ($page->img_path != '') {
				if (File::exists(storage_path('image/'. $page->img_path)))
					File::delete(storage_path('image/' . $page->img_path));
			}
		});
		MangaPage::deleted(function ($page) {
			$pages = MangaPage::where('id_manga', $page->id_manga)->orderBy('page_num')->get();
			if ($pages->count() > 0) {
				foreach ($pages as $index => $page) {
					$page->page_num = $index + 1;
					$page->save();
				}
			}
		});
		Manga::updating(function ($manga) {
			$oldmanga = $manga->getOriginal();
			if ($oldmanga['thumb'] != $manga->thumb && $oldmanga['thumb'] != '') {
				if (File::exists(storage_path('image/'. $oldmanga['thumb'])))
					File::delete(storage_path('image/'. $oldmanga['thumb']));
			}
		});
		Manga::saving(function ($manga) {
			$filename = preg_replace("/[^a-zA-Z0-9.\-]/", "-", $manga->thumb);
			if ($filename != $manga->thumb) {
				File::move(storage_path('image/'.$manga->thumb), storage_path('image/'.$filename));
				$manga->thumb = $filename;
			}
		});
		Category::deleting(function ($category) {
			if ($category->thumb != '') {
				if (File::exists(storage_path('image/'.$category->thumb)))
					File::delete(storage_path('image/'.$category->thumb));
			} 
		});
		Category::updating(function ($category) {
			$old = $category->getOriginal();
			if ($old['thumb'] != $category->thumb && $old['thumb']!='') {
				if (File::exists(storage_path('image/'.$old['thumb'])))
					File::delete(storage_path('image/'.$old['thumb']));
			}
		});
	}

	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
