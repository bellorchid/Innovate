<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentDetail extends Model {

	protected $fillable = [
        'tel',
        'github',
        'tag',
        'icon',
        'photo',
        'resume',
    ];

    public  function student()
    {
        return $this->belongsTo('App\Student');
    }
}
