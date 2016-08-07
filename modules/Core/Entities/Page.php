<?php
namespace Modules\Core\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Page extends Model {

    protected $fillable = [];
    protected $table = 'manga_page';

    public function chapter(){
        return $this->belongsTo(__NAMESPACE__ . '\Chapter');
    }

    public function comments(){
        return $this->morphToMany(__NAMESPACE__.'\Comment', 'commentable', 'commentable');
    }

}