<?php namespace App;
use Illuminate\Database\Eloquent\Model;


class Blog extends Model {
    protected $fillable = [

	];
	public $timestamps = false;
	
	public function students()
	{
		return $this->belongTo('App\Student');
	}
}