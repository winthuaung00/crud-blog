<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

	use SoftDeletes; 

	protected $fillable = [

		'title','content','featured','category_id','slug','user_id'

	];

	public function getfeaturedAttribute($featured)
	{
		return asset($featured);
	}
	
	protected $dates = ['deleted_at'];

   public function category()
   {
   	return $this->belongsTo('App\Category');
   }
   public function tags(){

   	return $this->belongsToMany('App\Tag');
   }

   public function user(){

   	return $this->belongsTo('App\User');
   }
}
