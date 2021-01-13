<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Controllers extends Model
{
    protected $fillable = [
        'CARNO', 'controller',
    ];

    protected $table = 'controllers';
}
