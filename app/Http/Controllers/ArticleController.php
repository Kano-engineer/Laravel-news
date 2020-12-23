<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article;
// 使うDB,articleクラスを呼び出す

class ArticleController extends Controller
{
    public function showList(){
    
    $text = article::all();

    return view('article',['key' => $text]);
    }

    

}