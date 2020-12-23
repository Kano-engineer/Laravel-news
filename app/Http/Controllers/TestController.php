<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// testクラス(データを呼び出す
use App\Models\test;
use App\Models\detail;
// requestでバリデーションを噛ませる
use App\Http\Requests\TestRequest;

class TestController extends Controller
{
    public function showList(){

    $tests = test::all();

    return view('test.main',['keys' => $tests]);
    }
    
    public function showDetail($id)
    {
    $test = test::find($id);
    $comment = detail::where('id',$id)->get();
    // $comment = detail::all();
    return view('test.detail',['key' => $test, 'comment' => $comment]);
    }

    public function add(TestRequest $request) {

        $post = new test();
        $post->title = $request->title;
        $post->article = $request->article;
        $post->save();
        
        return redirect('/test');
    }
}