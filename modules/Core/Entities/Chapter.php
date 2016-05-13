<?php namespace Modules\Core\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model {

    protected $fillable = [];
    protected $table = 'chapter';

    public function manga()
    {
    	return $this->belongsTo(__NAMESPACE__.'\Manga');
    }

    public function pages()
    {
    	// return $this->hasMany(__NAMESPACE__.'\Pages');
    }

}