<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    /**
     * テーブルの主キー
     *
     * @var string
     */
    protected $primaryKey = 'CARNO';

    /**
     * IDが自動増分されるか
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * 自動増分IDの「タイプ」
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * 複数代入しない属性
     *
     * @var array
     */
    protected $guarded = [];
    
    /**
     * trueで国産車falseで外車の車両だけを含むクエリのスコープ
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $boolean
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOfKoksn($query, $boolean)
    {
        return $query->where('KOKSN', $boolean);
    }

    /**
     * 指定したステータスの車両だけを含むクエリのスコープ
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $status
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOfStatus($query, $status)
    {
        return $query->where('STATS', $status);
    }

    /**
     * 指定したメーカーの車両だけを含むクエリのスコープ
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $maker
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOfMaker($query, $maker)
    {
        return $query->where('MKRNM', $maker);
    }

    /**
     * 車両の装備品を取得
     */
    public function options()
    {
        return $this->hasMany('App\Option');
    }

    /**
     * 車両のリモコンを取得
     */
    public function controllers()
    {
        return $this->hasMany('App\Controller');
    }

    /**
     * 車両の詳細情報(図)を取得
     */
    public function statuses()
    {
        return $this->hasMany('App\CarStatus');
    }

    /**
     * 車両に関連する検査員コメントレコードを取得
     */
    public function comment()
    {
        return $this->hasOne('App\CarComment');
    }

    /**
     * 車両に関連する取引レコードを取得
     */
    public function transaction()
    {
        return $this->hasOne('App\Transaction');
    }
}
