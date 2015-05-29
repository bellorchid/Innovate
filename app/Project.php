<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {


    protected $fillable = [
        'id',
        'name',
        'address',
        'demo',
        'abstract',
        'detail',
    ];

	public function students()
    {
        return $this->belongsToMany('App\Student');
    }

}
