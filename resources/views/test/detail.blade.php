<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comment</title>
</head>
<body>
<a href="/test">Laravel News</a>

<p>{{optional($key) ->title}}</p>
<p>{{optional($key) ->article}}</p>

@foreach ($errors->all() as $error)
<font color=red><li>{{$error}}</li></font>
@endforeach

<form method="post" action="test/{id}">
      <textarea name="comment"></textarea>
      <!-- <input type="hidden" name="id" value=> -->
      <input type="submit" value="comment">
</form>

@foreach($comment as $comment)
<p>{{$comment->comment}}</p>
<!-- {{$comment->id}} -->
<div>
  <form method="post" action="{{route('delete',$comment->id)}}">

    <input type="hidden" name="delete">
    <input type="submit" value="Delete">
  </form>
</div>
@endforeach

</body>
</html>