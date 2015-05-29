<?php namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Student extends Model implements AuthenticatableContract, CanResetPasswordContract {

    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'students';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name', 'email',
                'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    protected static function rules()
    {
        return[
            'id' => 'required|digits:8',   //<!-- 代表必需填写,8位数字 -->
            'password' => 'required'        //<!-- 必填 -->
              ];
    }

    public function detail()
    {
        return $this->hasOne('App\StudentDetail');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function projects()
    {
        return $this->belongsToMany('App\Project');
    }




}
