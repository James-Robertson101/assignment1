<!DOCTYPE html>
<html>
  <head>
    <title>{{$title}}</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link href="{{asset('css/layout.css')}}" type="text/css" rel="stylesheet" />
    {{ $styles ?? '' }}
  </head>
  <body>
    <div class="topnav">
      <a class = "navlink" href="/">Home</a>
      <a class = "navlink" href="/create">Add new Opening</a>
      <a class = "navlink" href="/about">About</a>
    </div>
    {{$slot}}
  </body>
</html>