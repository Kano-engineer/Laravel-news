<?php

namespace App\Models;

// モデルを使う
use Illuminate\Database\Eloquent\Model;

// モデルを継承
class test extends Model
{
    //テーブル名
    protected $table = 'data';

    public $timestamps = false;
    
    // 可変項目
    protected $fillable =
    [
        'id',
        'title',
        'article',
        'updated_at',
        'created_at'
    ];

}