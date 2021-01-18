<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuctionLog extends Model
{
    /**
     * テーブルの主キー
     *
     * @var string
     */
    protected $primaryKey = 'CARNO';

    protected $guarded = [];
}
