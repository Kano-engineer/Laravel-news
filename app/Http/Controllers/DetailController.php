<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detail;
use App\Http\Requests\DetailRequest;

class DetailController extends Controller
{
  public function commentAdd(DetailRequest $request,$id) {

    $comment = new detail();
    $comment->comment = $request->comment;
    $comment->id = $request->id;
    $comment->save();

    return redirect('test/{id}');
    // return redirect(route('detail'));
  }

// //引数の$idはパラメータで使っている数字
// public function create(CommentRequest $req) {

//   $comment = new Comment();

//   $comment->create([
//       'id' => request('id'),
//       'comment' => request('comment'),
//   ]);

//   //リダイレクトする際にどのルーティング処理を通って表示させるかを決めている
//   return redirect(route('details_route',[

//       //id => $idはパラメータ部分はこれを使ってね的な感じです。
//       'id' => request('id'),

//   ]));
// }

public function showComment(){

$comment = detail::all();

return view('test.detail', ['comments' => $comment]);
}

public function Delete()
{

detail::destroy();

return view('test.detail');
}
}