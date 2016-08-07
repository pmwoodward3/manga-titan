<?php
namespace Modules\Core\Entities;
   
use Illuminate\Database\Eloquent\Model;
use Cartalyst\Tags\TaggableTrait;
use Cartalyst\Tags\TaggableInterface;
use Carbon\Carbon;

class Manga extends Model implements TaggableInterface{

	use TaggableTrait;

    protected $fillable = [];
    protected $table = 'manga';

    public function category() {
    	return $this->belongsTo(__NAMESPACE__ . '\Category');
    }

    public function chapter() {
        return $this->hasMany(__NAMESPACE__. '\Chapter');
    }

    public function page() {
        return $this->hasManyThrough(__NAMESPACE__.'\Page', __NAMESPACE__.'\Chapter');
    }

    public function uploader() {
        return $this->belongsTo(__NAMESPACE__.'\Users');
    }

    public function getTagsArr(){
    	$ret = [];
    	$tags = $this->tags;
    	foreach ($tags as $tag) {
    		$ret[] = $tag->name;
    	}
    	return $ret;
    }

    public function comments(){
        return $this->morphToMany(__NAMESPACE__.'\Comment', 'commentable', 'commentable');
    }

    public function scopeNewest($query) {
        return $query->where('created_at', '>=', Carbon::today()->subWeek());
    }

}