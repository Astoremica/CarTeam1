<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * 複数代入しない属性
     *
     * @var array
     */
    protected $guarded = [
        'id', 'email_verified_at', 'remember_token', 'created_at', 'updated_at','deleted_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * ユーザーのお気に入り情報取得
     */
    public function favorites()
    {
        return $this->belongsToMany('App\Models\Car', 'favorites','user_id','CARNO');
    }
    
    /**
     * ユーザーの取引情報取得
     */
    public function cars()
    {
        return $this->belongsToMany('App\Models\Car', 'transactions','user_id','CARNO');
    }
    public function transactions()
    {
        return $this->hasMany('App\Models\Transaction', 'user_id');
    }

}
