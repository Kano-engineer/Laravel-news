<?php

namespace App\Models;

// モデルを使う
use Illuminate\Database\Eloquent\Model;

// モデルを継承
class detail extends Model
{
    //テーブル名
    protected $table = 'detail';

    public $timestamps = false;
    
    // 可変項目
    protected $fillable =
    [
        'id',
        'comment',
    ];

    /**
     * ユーザーに関連する電話レコードを取得
     */
    public function test()
    {
        return $this->hasOne('App\Models\test');
    }

}