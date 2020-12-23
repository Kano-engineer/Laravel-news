<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    //テーブル名
    protected $table = 'data';

    // 可変項目
    protected $fillable =
    [
        'title',
        'article'
    ];
}
