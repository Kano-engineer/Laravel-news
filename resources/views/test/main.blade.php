<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel News</title>
</head>
<body>
<a href="/test">Laravel News</a>

@foreach ($errors->all() as $error)
<font color=red><li>{{$error}}</li></font>
@endforeach

<form method="post" action="{{ url('/add') }}">
    {{ csrf_field() }}
    <p>
      <input id="title" type="text" name="title" placeholder="title">
    </p>
    <p>
      <textarea id="article" name="article" placeholder="article"></textarea>
    </p>
    <p>
      <input type="submit" value="Add">
    </p>
  </form>

@foreach($keys as $test)
<p>{{$test -> title}}</p>
<p>{{$test -> article}}</p>
<p><a href="test/{{$test->id}}">comment</a></p>
@endforeach

</body>
</html>