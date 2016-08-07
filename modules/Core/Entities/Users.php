<?php
namespace Modules\Core\Entities;
   
use Illuminate\Database\Eloquent\Model;
use Cartalyst\Sentinel\Users\EloquentUser;
use Laravel\Cashier\Contracts\Billable as BillableContract;
use Laravel\Cashier\Billable;

class Users extends EloquentUser implements BillableContract {

    use Billable;

    protected $fillable = ['name', 'email', 'password'];
    protected $table = 'users';

    public function manga() {
    	return $this->hasMany(__NAMESPACE__.'\Manga');
    }

    public function getFullnameAttribute() {
    	return $this->first_name . ' ' . $this->last_name;
    }

    public function comments() {
    	return $this->hasMany(__NAMESPACE__.'\Comment');
    }

    protected $dates = ['trial_ends_at', 'subscription_ends_at'];
}