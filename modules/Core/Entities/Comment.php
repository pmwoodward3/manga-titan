<?php
namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

    protected $table = 'comment';

    public function manga() {
        return $this->morphedByMany(__NAMESPACE__.'\Manga', 'commentable', 'commentable');
    }

    public function chapter() {
        return $this->morphedByMany(__NAMESPACE__.'\Chapter', 'commentable', 'commentable');
    }

    public function page() {
        return $this->morphedByMany(__NAMESPACE__.'\Page', 'commentable', 'commentable');
    }

    public function user() {
    	return $this->belongsTo(__NAMESPACE__.'\Users');
    }

    public function commentable() {
        return $this->morphTo();
    }

}